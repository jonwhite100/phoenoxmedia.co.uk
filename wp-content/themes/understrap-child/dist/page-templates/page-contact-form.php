<?php
/**
 * Template Name: Page With Contact Form
 * The template for any page that contains the contact form (so we can hide recaptcha 3 on all the others)
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_front_page() ) : ?>
    <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="page-wrapper">
    <div id="content" tabindex="-1">
        <!-- Do the left sidebar check -->
        <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

        <main class="site-main" id="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>
            <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->

        <!-- Do the right sidebar check -->
        <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
    </div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
