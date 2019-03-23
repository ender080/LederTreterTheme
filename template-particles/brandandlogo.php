<?php
/**
 * Template part : Bootstrap Brand and Logo
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codearosa
 */

?>

<!-- Your site title as branding in the menu -->
<?php if ( ! has_custom_logo() ) { ?>

  <?php if ( is_front_page() && is_home() ) : ?>

    <h1 class="navbar-brand"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

  <?php else : ?>

    <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

  <?php endif; ?>


<?php } else { ?>
   <a class="navbar-brand" <?php the_custom_logo(); ?></a>
<?php } ?><!-- end custom logo -->
