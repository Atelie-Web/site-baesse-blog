<footer class="text-white">
    <section class="top">
        <div class="container d-flex justify-content-between align-items-center flex-wrap px-4 px-sm-0">
            <?php if (is_active_sidebar('footer')) : ?>
                <!-- RENDERIZA OS WIDGETS -->
                <?php dynamic_sidebar('footer'); ?>
            <?php else : ?>
                <!-- CONTEÚDO PADRÃO (SEU CÓDIGO ORIGINAL) -->

                <!-- LINKS DO SITE -->
                <div class="links-site pb-3">
                    <h1 class=""><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name'); ?></a></h1>
                    <div class="links-content d-flex flex-column gap-2">
                        <?php
                        // Menu dinâmico do footer
                        if (has_nav_menu('footer_menu')) :
                            wp_nav_menu(array(
                                'theme_location' => 'footer_menu',
                                'container' => false,
                                'items_wrap' => '%3$s',
                                'link_class' => 'link-offset-2 link-underline link-underline-opacity-0 text-white'
                            ));
                        else :
                            // Links dinâmicos - pega todas as páginas + home
                            $pages = get_pages(array(
                                'sort_column' => 'menu_order',
                                'sort_order' => 'ASC'
                            ));

                            // Lista todas as páginas
                            foreach ($pages as $page) {
                                echo '<a href="' . esc_url(get_permalink($page->ID)) . '" class="link-offset-2 link-underline link-underline-opacity-0 text-white">'
                                    . esc_html($page->post_title)
                                    . '</a>';
                            }
                        endif;
                        ?>
                    </div>
                </div>

                <!-- O QUE TENHO ESCUTADO -->
                <div class="o-que-tenho-escutado">
                    <h3 class="text-uppercase mb-4">O que eu tenho escutado</h3>
                    <div class="content-musicas d-flex flex-column">
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
                </div>

                <!-- LICENÇA -->
                <div class="license d-flex flex-column align-items-center gap-3 gap-sm-5">
                    <small class="text-gray-3">
                        <?php bloginfo('description'); ?>
                    </small>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/imgs/creative.svg'); ?>" alt="creative commons">
                </div>

                <!-- TAGS -->
                <div class="tags">
                    <h3>TAGS</h3>
                    <div class="content-tags row gap-2">
                        <?php
                        $tags = get_tags(array(
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'number' => 18
                        ));

                        if ($tags) :
                            foreach ($tags as $tag) :
                                $tag_link = get_tag_link($tag->term_id);
                        ?>
                                <a href="<?php echo esc_url($tag_link); ?>" class="btn bg-red-900 text-white col">
                                    <?php echo esc_html($tag->name); ?>
                                </a>
                        <?php
                            endforeach;
                        else :
                            echo '<p>Nenhuma tag encontrada.</p>';
                        endif;
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- RODAPÉ INFERIOR -->
    <section class="bottom pt-3 pb-3 pb-sm-5">
        <div class="container">
            <p class="d-flex justify-content-between">
                <small><a href="<?php echo home_url('/termos-e-condicoes'); ?>" class="text-white text-decoration-none">Terms and conditions</a></small>
                <small>©<?php echo date('Y'); ?> - <?php bloginfo('name'); ?> | Todos os direitos reservados</small>
            </p>
        </div>
    </section>

    <?php wp_footer(); ?>
</footer>
</body>

</html>