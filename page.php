<?php get_header(); ?>

<main class="container row m-auto d-flex justify-content-between">
    <section class="text-white mt-5 pb-5 col-12 col-sm-8">
        <?php while (have_posts()) : the_post(); ?>

            <h1 class="text-center fw-semibold mb-5">
                <?php the_title(); ?>
            </h1>

            <article class="" style="max-width: 902px; margin-bottom: 28px;">
                <div class="post-content d-flex flex-column gap-4 pb-3">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; ?>
    </section>

    <div class="col-3 col-sm-4">
        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>