<?php get_header(); ?>

<div class="container text-white">
    <div class="row py-sm-5 py-3 gy-4 justify-content-between">
        <main class="single-post col col-sm-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <h1 class=""><?php the_title(); ?></h1>
                    <article class="content">
                        <div class="post-content mb-4 d-flex flex-column gap-4">
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

                                        // Fallback para imagem dos posts relacionados
                                        $related_thumbnail = has_post_thumbnail()
                                            ? get_the_post_thumbnail_url(get_the_ID(), 'medium')
                                            : get_template_directory_uri() . '/imgs/img-more-post.png';
                                        $related_alt = has_post_thumbnail()
                                            ? get_the_title() // CORREÇÃO: use get_the_title() em vez de get_the_title_attribute()
                                            : 'Imagem padrão';
                                ?>
                                        <div class="item-more-post">
                                            <img src="<?php echo esc_url($related_thumbnail); ?>" alt="<?php echo esc_attr($related_alt); ?>">
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

                    <!-- Seção de comentários FUNCIONAL -->
                    <section class="comments-section mt-5">

                        <?php
                        // Se os comentários estão abertos ou já existem comentários
                        if (comments_open() || get_comments_number()) :

                            // Mostra os comentários existentes primeiro
                            if (get_comments_number() > 0) :
                        ?>
                                <div class="existing-comments mb-4">
                                    <h3 class="h5 mb-3">Comentários (<?php echo get_comments_number(); ?>)</h3>
                                    <div class="comments-list">
                                        <?php
                                        wp_list_comments(array(
                                            'style' => 'div',
                                            'callback' => 'site_baesse_blog_comment_template'
                                        ));
                                        ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Formulário de comentários funcional -->
                            <div class="comment-form-wrapper">
                                <?php
                                comment_form(array(
                                    'title_reply' => '',
                                    'comment_notes_before' => '',
                                    'comment_notes_after' => '',
                                    'label_submit' => 'Enviar Comentário',
                                    'comment_field' => '
                                        <div class="mb-3">
                                            <textarea id="comment" name="comment" class="form-control bg-dark-2 text-white border-0" rows="4" placeholder="Escreva seu comentário..." required></textarea>
                                        </div>'
                                ));
                                ?>
                            </div>

                        <?php else : ?>
                            <p>Os comentários estão fechados para este post.</p>
                        <?php endif; ?>
                    </section>
            <?php
                endwhile;
            else :
                echo '<p>Nenhum conteúdo encontrado.</p>';
            endif;
            ?>
        </main>

        <div class="col-3 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>