<?php
/**
 * The main template file
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="home-slider"></div>
			<div class="featured-images">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<figure class="thumbnail featured-thumbnail"><a href="http://wilcohotwater.com.au/services/up-front-fixed-prices/" title="Up-front fixed prices"><img src="<?php echo get_template_directory_uri() . '/images/homepage_image1.png'; ?>" alt="Up-front fixed prices"></a></figure>
							<div class="post_content_holder"><h5><a href="http://wilcohotwater.com.au/services/up-front-fixed-prices/" title="Up-front fixed prices">Lorem ipsum</a></h5><div class="excerpt">Lorem ipsum</div></div>
						</div>
						<div  class="col-md-3">
							<figure class="thumbnail featured-thumbnail"><a href="http://wilcohotwater.com.au/services/up-front-fixed-prices/" title="Up-front fixed prices"><img src="<?php echo get_template_directory_uri() . '/images/homepage_image2.png'; ?>" alt="Up-front fixed prices"></a></figure>
							<div class="post_content_holder"><h5><a href="http://wilcohotwater.com.au/services/up-front-fixed-prices/" title="Up-front fixed prices">Lorem ipsum</a></h5><div class="excerpt">Lorem ipsum </div></div>
						</div>
						<div class="col-md-3">
							<figure class="thumbnail featured-thumbnail"><a href="http://wilcohotwater.com.au/services/up-front-fixed-prices/" title="Lorem ipsum"><img src="<?php echo get_template_directory_uri() . '/images/homepage_image3.png'; ?>" alt="Lorem ipsum"></a></figure>
							<div class="post_content_holder"><h5><a href="http://wilcohotwater.com.au/services/up-front-fixed-prices/" title="Lorem ipsum">Lorem ipsum</a></h5><div class="excerpt">Lorem ipsum </div></div>
						</div>
						<div class="col-md-3">
							<figure class="thumbnail featured-thumbnail"><a href="http://wilcohotwater.com.au/services/up-front-fixed-prices/" title="Lorem ipsum"><img src="<?php echo get_template_directory_uri() . '/images/homepage_image4.png'; ?>" alt="Lorem ipsum"></a></figure>
							<div class="post_content_holder"><h5><a href="http://wilcohotwater.com.au/services/up-front-fixed-prices/" title="Lorem ipsum">Lorem ipsum</a></h5><div class="excerpt">Lorem ipsum </div></div>
						</div>
					</div>
				</div>
			</div>	

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
