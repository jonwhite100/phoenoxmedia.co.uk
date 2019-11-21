<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header mb-5">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

    <div class="container mb-5">
        <div class="card shadow">
            <div class="card-img-top">
                <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
            </div>

            <div class="card-body">
                <?php the_content(); ?>
                <?php
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                            'after'  => '</div>',
                        )
                    );
                ?>

                <footer class="entry-footer">
                    <?php understrap_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </div>
        </div>
    </div>
</article><!-- #post-## -->
