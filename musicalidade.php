<?php get_header(); ?>
    <main>
        <div class="container text-white">
            <section class="musical-main">
                <h1 class="fs-2 text-center my-5">Musicalidade</h1>
                <section class="row py-sm-5 py-3 gy-4 justify-content-between">
                    <div class="musicalidade col col-sm-8">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/img-video.png' ); ?>" alt="">
                    </div>
                    <aside class="col-3 text-white d-none d-sm-block">
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
                        <p class="post">Gosto de tal e tal músicas esses são os meus estilos musicais e bla bla bla
                            lorem lorem lorem lorem lorem lorem lorem lorem.</p>
                    </aside>
                </section>
            </section>
            <section class="box-date-musical mt-5 pb-5">
                <h2 class="fs-4 mb-5">Minha Idade Musical</h2>
                <div class="box-musical flex-wrap d-flex justify-content-between">
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                    <div class="item-musica-date p-4 d-flex flex-column align-items-center gap-3">
                        <p>1994 - lorem ipsum</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/mini-thumb.png' ); ?>" alt="" class="w-100">
                    </div>
                </div>
            </section>
            <section class="mais-escutados m-auto mt-5 pt-5">
                <h2 class="fs-4 mb-5 text-center">Artistas mais escutados</h2>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/grafico.svg' ); ?>" alt="" class="">
            </section>
            <section class="comments-section">
                <h2 class="text-uppercase fs-4 mb-4">Deixe seu recado</h2>
                <textarea name="Comentário" id="" class="d-flex text-white">Comentário...</textarea>
            </section>
        </div>
    </main>
<?php get_footer(); ?>