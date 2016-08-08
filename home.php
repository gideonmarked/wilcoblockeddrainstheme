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

			<div class="home-slider">
				<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
			</div>
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
			<div class="main">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="question-widget">
								<h4>Do you have a Blocked Drain?</h4>
								<p>Without question, a blocked drain is one of the most frustrating and potentially time consuming issues that people can encounter. Whether it’s a kitchen sink, bathroom sink, toilet or bathtub, a blocked drain is never convenient and can often lead to a very messy clean up.</p>

								<p>When dealing with blocked drains, it’s important to know exactly what causes the build up to happen. Virtually anything that goes down a drain, including grease, hair, toys, oil, canister tops, fat, and food can possibly lead to blockage in a drain. With solid items, like toys and plastic caps, it’s somewhat obvious how a drain ends up clogged, but with things like fat and grease, blockage occurs differently. Initially going into a drain as a thick, hot substance, oil and grease will slowly block a drain at first because of its thick qualities. Blocked Drains Sydney</p>

								<p>As the hot liquid becomes cooler, it starts to solidify and will cause a complete block in any drain.  One of the best ways for you to unblock a drain without calling a plumber is to use a specialized chemical product.  For all of your substance build up blockage issues, the best thing to use is products like Draino and Dynamite.</p>
							</div>
							<div class="two-row">
								<div class="col-md-6">
									<img class="column-image" src="<?php echo get_template_directory_uri() . '/images/up_front_image.png'; ?>">
									<span class="description"><strong>Up-front fixed prices</strong>
									</br>When you deal with Wilco Hot Water, you’re assured that expenses will be upfront, fixed, transparent and inclusive. >>></span>
								</div>
								<div class="col-md-6">
									<img class="column-image" src="<?php echo get_template_directory_uri() . '/images/lifetime_labour_image.png'; ?>">
									<span class="description"><strong>Our Experienced Team</strong> 
									</br>Our Specialists Wilco Hot Water specialise in hot water systems including installation, upgrades and maintenance. >>></span>
								</div>
							</div>

							
						</div>
						<div class="col-md-4">
							<?php echo do_shortcode('[contact-form-7 id="14" title="Contact form 1"]'); ?>
							<img src="<?php echo get_template_directory_uri() . '/images/up_front_button.png'; ?>" class="home-image-buttons">
							<img src="<?php echo get_template_directory_uri() . '/images/lifetime_labour_button.png'; ?>" class="home-image-buttons">
						</div>
					</div>
				</div>
			</div>
			<div class="why_wilco">
				<div class="container">					
					<div class="row">					
						<h4 class="text-center">What people are saying about Wilco Blocked Drains</h4>
						<hr>
						<div class="col-md-6">
							<div class="col-md-2">
								<img class="column-image" src="<?php echo get_template_directory_uri() . '/images/man3.png'; ?>">
							</div>
							<div class="col-md-10">
								<span class="testimonials">
								<p>“I thoroughly recommend Wilco Hot Water. Got through on the phone immediately and they had a petrson out to repair our hot water system when they said they would. I’ve had no end of problems with tradies in the past but this group does what they say in a professional and friendly manner.”
								<p class="testimonials_name">Malcolm</p>
								<p class="testimonials_date">Thursday, 17th July 2016</p>
								</p>
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-2">
								<img class="column-image" src="<?php echo get_template_directory_uri() . '/images/man3.png'; ?>">
							</div>
							<div class="col-md-10">
								<span class="testimonials">
								<p>“I thoroughly recommend Wilco Hot Water. Got through on the phone immediately and they had a petrson out to repair our hot water system when they said they would. I’ve had no end of problems with tradies in the past but this group does what they say in a professional and friendly manner.”
								<p class="testimonials_name">Malcolm</p>
								<p class="testimonials_date">Thursday, 17th July 2016</p>
								</p>
								</span>
							</div>
						</div>	
					</div>
				</div>
			</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
