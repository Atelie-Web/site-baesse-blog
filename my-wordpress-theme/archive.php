<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

        <header class="archive-header">
            <h1 class="archive-title"><?php the_archive_title(); ?></h1>
            <div class="archive-meta"><?php the_archive_description(); ?></div>
        </header>

        <?php
        // Start the Loop
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', get_post_type() );
        endwhile;

        // Pagination
        the_posts_navigation();

    else :
        get_template_part( 'template-parts/content', 'none' );
    endif; ?>

</main>

<?php
get_sidebar();
get_footer();