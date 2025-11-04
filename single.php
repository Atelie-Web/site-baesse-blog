<?php get_header(); ?>
    <div class="container text-white">
        <div class="row py-sm-5 py-3 gy-4 justify-content-between">
            <main class="single-post col col-sm-8">
                <h1 class="fs-2">Post Title</h1>
                <article class="content">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/Rectangle.svg' ); ?>" alt="imagem do post">
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula nibh, interdum
                        non enim sit amet, iaculis aliquet nunc. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Aliquam sit amet ipsum ac velit egestas ultrices.
                        Vestibulum et neque id ex semper varius a sit amet metus. Vivamus congue dolor eget aliquam
                        hendrerit. Etiam iaculis finibus egestas. Nam viverra urna quis odio efficitur malesuada.
                        Maecenas rhoncus enim eu scelerisque rutrum. Pellentesque et mollis enim. Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Curabitur sed commodo leo. Suspendisse potenti. Maecenas
                        gravida ipsum placerat ligula posuere, ut rhoncus velit eleifend.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula nibh, interdum
                        non enim sit amet, iaculis aliquet nunc. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Aliquam sit amet ipsum ac velit egestas ultrices.
                        Vestibulum et neque id ex semper varius a sit amet metus. Vivamus congue dolor eget aliquam
                        hendrerit. Etiam iaculis finibus egestas. Nam viverra urna quis odio efficitur malesuada.
                        Maecenas rhoncus enim eu scelerisque rutrum. Pellentesque et mollis enim. Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Curabitur sed commodo leo. Suspendisse potenti. Maecenas
                        gravida ipsum placerat ligula posuere, ut rhoncus velit eleifend.</p>

                </article>
                <section class="content-tags d-flex gap-2 mt-4 justify-content-end w-100">
                    <a href="archive.html" class="btn bg-red-900 text-white">Ambiente</a>
                    <a href="archive.html" class="btn bg-red-900 text-white">Ambiente</a>
                </section>
                <section class="more-posts">
                    <h2 class="text-uppercase fs-4 my-5">more posts</h2>
                    <div class="box-shadow">
                        <div class="box-more-posts d-flex gap-2">
                            <div class="item-more-post">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/img-more-post.png' ); ?>" alt="">
                                <h4 class="my-2">Post Title</h4>
                                <p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem </p>
                            </div>
                            <div class="item-more-post">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/img-more-post.png' ); ?>" alt="">
                                <h4 class="my-2">Post Title</h4>
                                <p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem </p>
                            </div>
                            <div class="item-more-post">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/img-more-post.png' ); ?>" alt="">
                                <h4 class="my-2">Post Title</h4>
                                <p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem </p>
                            </div>
                            <div class="item-more-post">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/img-more-post.png' ); ?>" alt="">
                                <h4 class="my-2">Post Title</h4>
                                <p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="comments-section mt-5">
                    <h2 class="text-uppercase fs-4 mb-4">Deixe seu recado</h2>
                    <textarea name="Comentário" id="" class="d-flex text-white">Comentário...</textarea>
                </section>
            </main>
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
                <p class="mb-4">Gosto de tal e tal músicas esses são os meus estilos musicais e bla bla bla lorem lorem
                    lorem lorem lorem lorem lorem lorem.</p>
                <div class="posts">
                    <h3>Posts recentes</h3>
                    <div class="box-post d-flex flex-column gap-1">
                        <p class="post">Gosto de tal e tal músicas esses são os meus estilos musicais e bla bla bla
                            lorem lorem lorem lorem lorem lorem lorem lorem.</p>
                        <p class="post">Gosto de tal e tal músicas esses são os meus estilos musicais e bla bla bla
                            lorem lorem lorem lorem lorem lorem lorem lorem.</p>
                        <p class="post">Gosto de tal e tal músicas esses são os meus estilos musicais e bla bla bla
                            lorem lorem lorem lorem lorem lorem lorem lorem.</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
<?php get_footer(); ?>