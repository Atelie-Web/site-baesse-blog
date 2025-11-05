<?php get_header(); ?>

<div class="container text-white">
    <div class="row py-sm-5 py-3 gy-4 justify-content-between">
        <main class="archive col col-sm-8">
            <h1 class="fs-2 mb-5">
                <?php
                if (is_category()) {
                    single_cat_title('Resultados da categoria: ');
                } elseif (is_tag()) {
                    single_tag_title('Resultados da tag: ');
                } elseif (is_author()) {
                    echo 'Publicações de ' . get_the_author();
                } elseif (is_date()) {
                    echo 'Arquivos de ' . get_the_date('F \d\e Y');
                } else {
                    echo 'Arquivos';
                }
                ?>
            </h1>

            <article class="content-archive d-flex flex-column">
                <?php if (have_posts()) : $post_count = 0; ?>
                    <?php while (have_posts()) : the_post(); $post_count++; ?>
                        <div class="item-post-tag <?php echo $post_count === 1 ? 'post-main' : ''; ?> mb-5 d-flex flex-column">

                            <?php if ($post_count === 1) : ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/imgs/img-thumb-post-main.png'); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            <?php endif; ?>

                            <div class="content-post d-flex flex-column gap-2 mb-2 <?php echo $post_count === 1 ? 'mt-3' : ''; ?>">
                                <h3 class="mb-0">
                                    <a href="<?php the_permalink(); ?>" class="title-post">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <small>
                                    <?php echo wp_trim_words(get_the_excerpt(), 55, '...'); ?>
                                </small>
                                <a href="<?php the_permalink(); ?>" class="read-more-post my-3 btn bg-red-900">READ MORE</a>
                            </div>

                            <small class="date align-self-end">
                                <?php echo get_the_date('d/m/y'); ?>
                            </small>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Nenhum post encontrado.</p>
                <?php endif; ?>

                <div class="box-previous-post my-5 py-5 m-auto">
                    <div class="pagination">
                        <?php
                        the_posts_pagination([
                            'mid_size' => 2,
                            'prev_text' => __('« Anteriores', 'textdomain'),
                            'next_text' => __('Próximos »', 'textdomain'),
                        ]);
                        ?>
                    </div>
                </div>
            </article>
        </main>

        <aside class="col-3 text-white d-none d-sm-block">
            <?php if (is_active_sidebar('sidebar-1')) : ?>
                <?php dynamic_sidebar('sidebar-1'); ?>
            <?php else : ?>
                <h3 class="mb-4">Recomendação Musical</h3>
                <div class="content-musicas d-flex flex-column mb-4">
                    <div class="musica d-flex p-2 bg-red-900">
                        <span>Música lorem ipsum loremMúsica lorem ipsum lorem</span>
                        <i class="fa-solid fa-music"></i>
                    </div>
                    <div class="musica d-flex p-2 bg-red-900">
                        <span>Música lorem ipsum loremMúsica lorem ipsum lorem</span>
                        <i class="fa-solid fa-music"></i>
                    </div>
                    <div class="musica d-flex p-2 bg-red-900">
                        <span>Música lorem ipsum loremMúsica lorem ipsum lorem</span>
                        <i class="fa-solid fa-music"></i>
                    </div>
                </div>
                <p class="mb-4">Gosto de tal e tal músicas esses são os meus estilos musicais e bla bla bla lorem lorem
                    lorem lorem lorem lorem lorem lorem.</p>
                <div class="posts">
                    <h3>Posts recentes</h3>
                    <div class="box-post d-flex flex-column gap-2">
                        <?php
                        $recent_posts = wp_get_recent_posts(['numberposts' => 3]);
                        foreach ($recent_posts as $post) :
                        ?>
                            <p class="post"><?php echo esc_html(wp_trim_words($post['post_content'], 20)); ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
