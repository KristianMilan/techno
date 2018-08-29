<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package multiplex
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="bodymovin"><?php echo do_shortcode('[bodymovin anim_id="214"]');?></div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'multiplex' ); ?></a>
		<section id="top-widget" class="top-widgets row global_padding u-full-width">
		<div class="top-bar-left sixx columns  u-pull-left topp" data-check="left"><div><?php dynamic_sidebar( 'top-left-sidebar' ); ?></div></div>
		<div class="top-bar-right sixx columns topp u-pull-right" data-check="right"><div><?php dynamic_sidebar( 'top-right-sidebar' ); ?></div></div>
		</section>
	<header id="masthead" class="site-header mt_sticky_check">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
				<h5><?php echo __('KORYFO', 'koryfo'); ?></h5>
		</nav><!-- #site-navigation -->

		<div class="mobile_menu">
		<div id="sidebar_menu"><div class="menu_enable" onclick="openNav()"><div class="rev_men_t"></div>
<div class="hamburger hamburger--collapse js-hamburger">
  <div class="hamburger-box">
    <div class="hamburger-inner"></div>
  </div>
</div>
		</div></div>

		<nav id="site-navigation-mobile" class="sidenav">
		<div class="menuitems">
		<?php
				wp_nav_menu( array(
					'theme_location' => 'mobile-menu',
					'menu_id'        => 'mobile-menu',
				) );
			?></div>
			<div class="big_message"><h3><?php echo __('KORYFO', 'koryfo'); ?></h3></div>
			<div class="widgets_area"><?php dynamic_sidebar('mobile-menu-widgets'); ?></div>
		</nav>

		</div>
		</div>
	</header><!-- #masthead -->
<div id="barba-wrapper">
	<div id="content" class="site-content barba-container">

	