<?php get_header(); ?>

<div class="container text-white">
    <div class="row py-sm-5 py-3 gy-4 justify-content-between">
        <main class="single-post col col-sm-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <h1 class="fs-2"><?php the_title(); ?></h1>
                    <article class="content">
                        <div class="post-content mb-4">
                            <?php the_content(); ?>
                        </div>
                    </article>

                    <section class="content-tags d-flex gap-2 mt-4 justify-content-end w-100">
                        <?php
                        $post_tags = get_the_tags();
                        if ($post_tags) :
                            foreach ($post_tags as $tag) :
                        ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn bg-red-900 text-white">
                                    <?php echo esc_html($tag->name); ?>
                                </a>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </section>

                    <!-- Seção “More Posts” com a estrutura original -->
                    <section class="more-posts">
                        <h2 class="text-uppercase fs-4 my-5">more posts</h2>
                        <div class="box-shadow">
                            <div class="box-more-posts d-flex gap-4">
                                <?php
                                $related = new WP_Query(array(
                                    'posts_per_page' => 5,
                                    'post__not_in' => array(get_the_ID()),
                                    'orderby' => 'rand'
                                ));

                                if ($related->have_posts()) :
                                    while ($related->have_posts()) : $related->the_post();
                                ?>
                                        <div class="item-more-post">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                            <?php else : ?>
                                                <img src="<?php echo esc_url(get_template_directory_uri() . '/imgs/img-more-post.png'); ?>" alt="Imagem padrão">
                                            <?php endif; ?>
                                            <h4 class="my-2 fs-5">
                                                <a href="<?php the_permalink(); ?>" class="text-white text-decoration-none"><?php the_title(); ?></a>
                                            </h4>
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<p>Nenhum post encontrado.</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                    </section>

                    <!-- Mantida a seção de comentários original -->
                    <section class="comments-section mt-5">
                        <h2 class="text-uppercase fs-4 mb-4">Deixe seu recado</h2>
                        <textarea name="Comentário" id="" class="d-flex text-white">Comentário...</textarea>
                    </section>
            <?php
                endwhile;
            else :
                echo '<p>Nenhum conteúdo encontrado.</p>';
            endif;
            ?>
        </main>

        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
