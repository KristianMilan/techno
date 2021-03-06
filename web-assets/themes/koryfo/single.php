<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package koryfo
 */

get_header();

$plugin_dir = get_template_directory_uri(__FILE__);
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
   the_post();
   $featured_img = get_post_meta(get_the_ID(), '_thumbnail_id', true) ?: '';
   $images = get_post_meta(get_the_ID(), 'krf_images', true) ?: array() ;
   $gallery = array_merge(array($featured_img), $images);
   $next = get_next_post() ?: '';
   if (empty($next)) {
    $next = get_previous_post();
   }
  ?>
   <div id="project_gallery" class="side_msg_section content_img_view">
		    <div class="main_content_position">
          <div class="text">
          <?php
          if (!empty($gallery)) { ?>
            <div class="image img_gallery" data-columns="1" data-mcolumns="1" data-scolumns="1">
            <?php foreach ($gallery as $img_id) {
              $img = custom_image_element($img_id, 'cover', 0 , 1, 'large'); ?>
              <div class="gallery_img_wrapper"><?php echo $img; ?></div>
              <?php
            } ?>
            </div>
          <?php 
          }
          include('template-parts/photoswipe.php');
          ?>
          </div>
		    </div>
      <div class="side_msg">
       <h1><?php echo get_the_title(); ?></h1>
      </div>
   </div>

  <div id="project_info" class="side_msg_section">
   <div class="main_content_position">
     <div class="breadcrumb_wrap"><?php echo apply_filters('sbp_get_post_title_breadcrumb',$post->ID, $title); ?></div>
   </div>
  </div>
  <div id="project_desc" class="side_msg_section">
   <div class="main_content_position">
     <div id="project_see_more" class="width_50">
      <?php 
      if (!empty($next)) {
      ?>
              <div class="before_icon"><h2><?php echo __('SEE ALSO', 'techno'); ?></h2></div>
              <div class="next_project"><a href="<?php echo $next->guid; ?>"><h3><?php echo $next->post_title ;?></h3></a></div>
      <?php } ?>
      </div>
   <div id="project_text" class="width_50">
     <?php the_content(); 
     echo do_shortcode('[custom_button title="'.__('Contact us', 'techno').'"] ');
     ?>
   </div>
  </div>
        </div>


  <?php
  endwhile; // End of the loop.
  ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
