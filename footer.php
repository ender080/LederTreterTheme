<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper border-top" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

				<footer class="site-footer" id="colophon">

					<div class="row">

					<div class="col-md-6 col-sm-12"><?php dynamic_sidebar( 'footer_one' ); ?></div><!--footer widgets one-->

					<div class="col-md-6 col-sm-12"><?php dynamic_sidebar( 'footer_two' ); ?></div><!--footer widgets two-->

					<div class="col-12"><?php dynamic_sidebar( 'footer_three' ); ?></div><!--footer widgets three-->

						<div class="site-info text-center col-12">

              <?php get_template_part( 'template-particles/socialmenu' ); ?><!--socialmenu-->

					</div><!-- .site-info -->

			</div><!-- row end -->

		</footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
