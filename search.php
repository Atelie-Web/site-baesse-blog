<?php get_header(); ?>

<div class="container text-white">
    <div class="row py-sm-5 py-3 gy-4 justify-content-between">
        <main class="archive col col-sm-8">
            <h1 class="fs-2 mb-5">
                <?php
                printf(
                    __('Resultados da busca por: "%s"', 'meu-tema'),
                    get_search_query()
                );
                ?>
            </h1>

            <article class="content-archive d-flex flex-column">
                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="item-post-tag <?php echo ($wp_query->current_post == 0) ? 'post-main mb-5' : ''; ?> d-flex flex-column">

                            <?php if (has_post_thumbnail() && $wp_query->current_post == 0) : ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>

                            <div class="content-post d-flex flex-column gap-2 mb-2 mt-3 border-bottom pb-2">
                                <h3 class="mb-0">
                                    <a href="<?php the_permalink(); ?>" class="title-post">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <small class="post-excerpt text-white">
                                    <?php
                                    if (has_excerpt()) {
                                        echo get_the_excerpt();
                                    } else {
                                        echo wp_trim_words(get_the_content(), 50);
                                    }
                                    ?>
                                </small>

                                <a href="<?php the_permalink(); ?>" class="read-more-post my-3 btn bg-red-900 text-white align-self-start">
                                    <?php _e('READ MORE', 'meu-tema'); ?>
                                </a>
                            </div>

                            <small class="date align-self-end text-white read-more-post-white">
                                <?php echo get_the_date('d/m/y'); ?>
                            </small>
                        </div>

                    <?php endwhile; ?>

                    <!-- Paginação -->
                    <div class="box-previous-post my-5 py-5 m-auto">
                        <?php
                        the_posts_pagination(array(
                            'prev_text' => __('&laquo; Anterior', 'meu-tema'),
                            'next_text' => __('Próxima &raquo;', 'meu-tema'),
                            'class' => 'pagination justify-content-center'
                        ));
                        ?>
                    </div>

                <?php else : ?>

                    <!-- Nenhum resultado encontrado -->
                    <div class="no-results">
                        <h3><?php _e('Nenhum resultado encontrado', 'meu-tema'); ?></h3>
                        <p><?php _e('Tente usar outros termos de busca.', 'meu-tema'); ?></p>

                        <!-- Formulário de busca -->
                        <div class="search-form mt-4">
                            <?php get_search_form(); ?>
                        </div>
                    </div>

                <?php endif; ?>
            </article>
        </main>

        <!-- Sidebar -->
        <div class="col-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>