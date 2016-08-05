<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="header-container" style="background: url(<?php header_image(); ?>);">
			<header id="branding" role="banner">
					<hgroup>
						<?php 
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							} else {
						?>
						<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
						<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
						<?php } ?>
					</hgroup>
					<div class="span4" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar">
						<div class="visible-all-devices">
							<div class="textwidget">
								<em class="phone_number">
									<a href="">02 XXX XXX</a>
								</em>
							</div>
						</div>
						<div id="text-10" class="visible-all-devices ">
							<div class="textwidget">
								<em class="email_add">
									<a href="mailto:info@wilcohotwater.com.au">info@wilcoblockeddrains.com.au</a>
								</em>
							</div>
						</div>
					</div>
					<nav id="access" role="navigation">
						<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #access -->
					<div class="end-clear"></div>
			</header><!-- #branding -->
	</div>
	<div id="content" class="site-content">
