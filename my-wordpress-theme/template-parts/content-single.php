<?php
/**
 * Template part for displaying single post content.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package My_WordPress_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        the_title('<h1 class="entry-title">', '</h1>');
        ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'my-wordpress-theme'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        // Display post meta information (e.g., categories, tags, etc.)
        ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->