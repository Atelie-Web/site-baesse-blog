<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php
    // The Loop for displaying front page content
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            // Include the content template part for the front page
            get_template_part( 'template-parts/content', 'page' );
        endwhile;
    else :
        // If no content, include the template for no content
        get_template_part( 'template-parts/content', 'none' );
    endif;
    ?>

</main><!-- #main -->

<?php
get_footer();