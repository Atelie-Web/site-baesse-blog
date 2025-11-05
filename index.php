<?php get_header(); ?>
<main class="container"> <!-- Container obrigatório -->
    <section class="text-white" style="margin-bottom: 120px;">
        <h2 class="text-center mb-5">
            Devaneios de uma mente sem limites
        </h2>
        <article class="row g-4 align-items-start mb-5">
            <!-- Imagem do post -->
            <figure class="col-lg-7">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid w-100 rounded', 'alt' => get_the_title()]); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/imgs/Rectangle 1.png'); ?>"
                        class="img-fluid w-100 rounded"
                        alt="Imagem padrão">
                <?php endif; ?>
            </figure>

            <!-- Conteúdo -->
            <div class="col-lg-5 d-flex flex-column justify-content-between">
                <div>
                    <h3 class="titulo-noticia mb-4">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-white">
                            <?php the_title(); ?>
                        </a>
                    </h3>

                    <p class="mb-4">
                        <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                    </p>
                </div>

                <!-- Info e botão -->
                <div>
                    <div class="d-flex justify-content-between border-top pt-2 mb-3">
                        <div class="d-flex gap-2">
                            <i class="fa-regular fa-heart text-danger"></i>
                            <i class="fa-regular fa-comment-dots"></i>
                        </div>
                        <div>
                            <i class="fa-regular fa-calendar"></i>
                            <span><?php echo get_the_date(); ?></span>
                        </div>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="btn btn-danger text-white px-4 py-2 butao-ler"
                        style="max-width: 167px;">
                        READ MORE
                    </a>
                </div>
            </div>
        </article>


    </section>
    <div class="box-gradiente" style="margin-bottom: 120px;">
        <div class="box-recents-posts d-flex gap-5">
            <?php
            $recent_posts = new WP_Query(array(
                'posts_per_page' => 6,
                'post_status'    => 'publish'
            ));

            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
                    <div class="item-post item-post-home-recent d-flex gap-3 text-white">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>">
                            </a>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/imgs/img_post.png'); ?>" alt="Imagem padrão">
                            </a>
                        <?php endif; ?>

                        <div class="content-item-post">
                            <h4 class="mb-4 fw-normal fs-6">
                                <a href="<?php the_permalink(); ?>" class="text-white text-decoration-none">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                            <p class="text-gray-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                            </p>
                            <div class="item-post-bottom d-flex justify-content-between align-items-center border-top pt-2">
                                <a href="<?php the_permalink(); ?>" class="saber-mais text-red-700">
                                    <small>Saber mais</small>
                                </a>
                                <small class="date fw-light"><?php echo get_the_date('d/m/y'); ?></small>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-white">Nenhum post encontrado.</p>';
            endif;
            ?>
        </div>
    </div>
    <div class="container">
        <h2 class="section-title">PRINCIPAIS POSTS</h2>

        <div class="row">

            <?php
            // Query para o post principal (mais recente)
            $main_post = new WP_Query(array(
                'posts_per_page' => 1
            ));

            if ($main_post->have_posts()) :
                while ($main_post->have_posts()) : $main_post->the_post();
            ?>
                    <div class="col-lg-6 mb-4">
                        <div class="main-post">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/imgs/default.jpg'); ?>" alt="Imagem padrão">
                            <?php endif; ?>

                            <h3 class="card-title">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-white">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <p class="card-text">
                                <?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?>
                            </p>

                            <div class="post-meta">
                                <span>
                                    <i class="bi bi-heart heart" data-id="<?php the_ID(); ?>"></i>
                                    <span class="like-count ms-1">0</span>
                                </span>
                                <span><i class="bi bi-calendar3"></i> <?php echo get_the_date('d/m/y'); ?></span>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="btn read-more-btn">READ MORE</a>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

            <div class="col-lg-6">
                <?php
                // Query para os 3 próximos posts
                $small_posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'offset' => 1
                ));

                if ($small_posts->have_posts()) :
                    while ($small_posts->have_posts()) : $small_posts->the_post();
                ?>
                        <div class="small-post mb-4">
                            <h6 class="card-title mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-white">
                                    <?php the_title(); ?>
                                </a>
                            </h6>
                            <p class="card-text mb-1">
                                <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                            </p>
                            <div class="post-date text-muted"><?php echo get_the_date('d/m/y'); ?></div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

        </div>
    </div>

</main>
<?php get_footer(); ?>