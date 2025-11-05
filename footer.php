<footer class="text-white">
    <section class="top">
        <div class="container d-flex justify-content-between align-items-center flex-wrap px-4 px-sm-0">

            <!-- LINKS DO SITE -->
            <div class="links-site pb-3">
                <h1 class="fw-normal"><?php bloginfo('name'); ?></h1>
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
                        // Fallback — exibe links padrão se o menu não existir
                        ?>
                        <a href="<?php echo home_url('/'); ?>" class="link-offset-2 link-underline link-underline-opacity-0 text-white">Home</a>
                        <a href="<?php echo home_url('/musicalidade'); ?>" class="link-offset-2 link-underline link-underline-opacity-0 text-white">Músicas</a>
                        <a href="<?php echo home_url('/frases'); ?>" class="link-offset-2 link-underline link-underline-opacity-0 text-white">Frases</a>
                        <a href="<?php echo home_url('/projetos'); ?>" class="link-offset-2 link-underline link-underline-opacity-0 text-white">Projetos</a>
                        <a href="<?php echo home_url('/quem-baesse'); ?>" class="link-offset-2 link-underline link-underline-opacity-0 text-white">Quem É Baesse</a>
                        <a href="<?php echo home_url('/recomendacoes'); ?>" class="link-offset-2 link-underline link-underline-opacity-0 text-white">Recomendações</a>
                        <a href="<?php echo home_url('/#contato'); ?>" class="link-offset-2 link-underline link-underline-opacity-0 text-white">Contato</a>
                    <?php endif; ?>
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