<?php get_header(); ?>

<div class="container text-white">
    <div class="row py-sm-5 py-3 gy-4 justify-content-between">
        <main class="archive col-12 col-sm-8">
            <h1 class="fs-2 mb-5">
                <?php
                if (is_category()) {
                    echo 'Categoria: ';
                    single_cat_title();
                } elseif (is_tag()) {
                    echo 'Tag: ';
                    single_tag_title();
                } elseif (is_author()) {
                    echo 'Publicações de: ' . get_the_author_meta('display_name');
                } elseif (is_date()) {
                    if (is_year()) {
                        echo 'Arquivo do ano: ' . get_the_date('Y');
                    } elseif (is_month()) {
                        echo 'Arquivo do mês: ' . get_the_date('F \d\e Y');
                    } elseif (is_day()) {
                        echo 'Arquivo do dia: ' . get_the_date('d \d\e F \d\e Y');
                    }
                } elseif (is_post_type_archive()) {
                    post_type_archive_title();
                } else {
                    echo 'Arquivos';
                }
                ?>
            </h1>

            <article class="content-archive d-flex flex-column">
                <?php if (have_posts()) : $post_count = 0; ?>

                    <?php while (have_posts()) : the_post();
                        $post_count++; ?>

                        <div class="item-post-tag <?php echo ($post_count === 1) ? 'post-main mb-5' : 'mb-4'; ?> d-flex flex-column">

                            <?php if ($post_count === 1 && has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', [
                                        'class' => 'img-fluid w-100',
                                        'alt' => get_the_title()
                                    ]); ?>
                                </a>
                            <?php elseif ($post_count === 1) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/imgs/img-thumb-post-main.png'); ?>"
                                        class="img-fluid w-100"
                                        alt="<?php the_title_attribute(); ?>">
                                </a>
                            <?php endif; ?>

                            <div class="content-post d-flex flex-column gap-2 mb-2 <?php echo ($post_count === 1) ? 'mt-3' : ''; ?>">
                                <h3 class="mb-0">
                                    <a href="<?php the_permalink(); ?>" class="title-post text-white text-decoration-none">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <small class="text-gray-3">
                                    <?php
                                    if (has_excerpt()) {
                                        echo get_the_excerpt();
                                    } else {
                                        echo wp_trim_words(get_the_content(), 55, '...');
                                    }
                                    ?>
                                </small>

                                <a href="<?php the_permalink(); ?>" class="read-more-post my-3 btn bg-red-900 align-self-start text-white">
                                    READ MORE
                                </a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                <div class="post-meta">
                                    <small class="text-white">
                                        <i class="fa-regular fa-calendar me-1"></i>
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </small>
                                    <?php if (get_comments_number() > 0) : ?>
                                        <small class="text-gray-2 ms-3">
                                            <i class="fa-regular fa-comment me-1"></i>
                                            <?php echo get_comments_number(); ?>
                                        </small>
                                    <?php endif; ?>
                                </div>

                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) :
                                ?>
                                    <small class="text-gray-2">
                                        <i class="fa-regular fa-folder me-1"></i>
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </small>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <!-- Paginação -->
                    <div class="box-previous-post my-5 py-5 text-center">
                        <div class="pagination justify-content-center">
                            <?php
                            the_posts_pagination([
                                'mid_size'  => 2,
                                'prev_text' => __('« Anteriores', 'meu-tema'),
                                'next_text' => __('Próximos »', 'meu-tema'),
                                'class'     => 'pagination'
                            ]);
                            ?>
                        </div>
                    </div>

                <?php else : ?>

                    <div class="no-results text-center py-5">
                        <h3 class="text-gray-2 mb-3">Nenhum conteúdo encontrado</h3>
                        <p class="text-gray-3 mb-4">
                            <?php
                            if (is_category()) {
                                echo 'Não há posts publicados nesta categoria.';
                            } elseif (is_tag()) {
                                echo 'Não há posts com esta tag.';
                            } elseif (is_author()) {
                                echo 'Este autor ainda não publicou nenhum conteúdo.';
                            } elseif (is_date()) {
                                echo 'Não há posts publicados nesta data.';
                            } else {
                                echo 'Nenhum post encontrado.';
                            }
                            ?>
                        </p>
                        <a href="<?php echo home_url('/'); ?>" class="btn bg-red-900 text-white">
                            Voltar para Home
                        </a>
                    </div>

                <?php endif; ?>
            </article>
        </main>

        <!-- Sidebar -->
        <div class="col-3 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>