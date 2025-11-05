<aside class="col-3 text-white d-none d-sm-block">
    <h3 class="mb-4">Recomendação Musical</h3>
    <div class="content-musicas d-flex flex-column mb-4">
        <div class="musica d-flex p-2 bg-red-900">
            <span>Música lorem ipsum lorem</span>
            <i class="fa-solid fa-music"></i>
        </div>
        <div class="musica d-flex p-2 bg-red-900">
            <span>Música lorem ipsum lorem</span>
            <i class="fa-solid fa-music"></i>
        </div>
        <div class="musica d-flex p-2 bg-red-900">
            <span>Música lorem ipsum lorem</span>
            <i class="fa-solid fa-music"></i>
        </div>
    </div>
    <p class="mb-4">
        Gosto de tal e tal músicas esses são os meus estilos musicais e bla bla bla lorem lorem lorem lorem lorem lorem lorem lorem.
    </p>
    <div class="posts">
        <h3>Posts recentes</h3>
        <div class="box-post d-flex flex-column gap-3">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 3,
                'post_status' => 'publish'
            ));
            foreach ($recent_posts as $post_item) :
            ?>
                <p class="post">
                    <a href="<?php echo get_permalink($post_item['ID']); ?>" class="text-white text-decoration-none">
                        <?php echo esc_html($post_item['post_title']); ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
</aside>