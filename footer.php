<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="footer-widgets">
				<div class="widget-columns row">
					<div class="col-md-3">
						<?php if ( dynamic_sidebar('column-1') ) : else : endif; ?>
					</div>
					<div class="col-md-3">
						<?php if ( dynamic_sidebar('column-2') ) : else : endif; ?>
					</div>
					<div class="col-md-3">
						<?php if ( dynamic_sidebar('column-3') ) : else : endif; ?>
					</div>
					<div class="col-md-3">
						<?php if ( dynamic_sidebar('column-4') ) : else : endif; ?>
					</div>
				</div><!-- .widget-columns -->
			</div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
