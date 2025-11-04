<?php
/**
 * Template part for displaying standard post content.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package My_WordPress_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
        ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'my-wordpress-theme' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        // Display post meta information, such as categories and tags
        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                echo 'Posted in: ' . get_the_category_list( ', ' );
                echo ' | ';
                echo 'Tags: ' . get_the_tag_list( '', ', ' );
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->