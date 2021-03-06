<?php
/**
 * The main template file
 * Template Name: Recent Work Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<div class="offset-white"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- <div class="white-container"> -->
				<!-- <div class="container"> -->
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
			<!-- 	</div> -->
			<!-- </div> -->
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
