<?php get_header(); ?>
    <main class="row container m-auto">
        <section class="text-white container projetos col-8">
            <h1 class="text-center fw-semibold">
                Projetos Apoiados
            </h1>
            <article style="margin-bottom: 150px;">
                <figure>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/projeto.png' ); ?>" alt="" class="">
                </figure>
                <p style="margin-bottom: 10px;">
                    Projetos FreeWare ou Código-Aberto que planejo, que já apoiei ou apoio financeiramente (não quer
                    dizer que foi um valor absurdo :)) ou de outra maneira (trabalho voluntário).  Essa lista serve para
                    conhecer bons sistemas que valem uma pequena, ou grande, contribuição. Lembrando que os projetos de
                    código aberto a sua melhor contribuição é com código, traduções, ou seja, força de trabalho e não
                    financeiramente (claro que dinheiro ajuda :P).

                </p>
                <div class="d-flex flex-column" style="gap: 21px">
                    <h5>
                        Futuros:
                    </h5>
                    <a href="" class="text-white">
                        TagScanner (FreeWare)
                    </a>
                    <p>
                        TagScanner is a multifunction program for organizing and managing your music collection. It can
                        edit tags of common audio formats, rename files based on the tag and stream information,
                        generate tag information from filenames, and perform any transformations of the text from tags
                        and filenames. Also you may get album info and covers via online databases like freedb, Amazon
                        or Discogs. Supports ID3v1, ID3v2, Vorbis comments, APEv2, WindowsMedia and MP4(iTunes) tags.
                        Powerful TAG editor with batch functions and special features. Playlists maker with ability to
                        export playlists to HTML or Excel. Easy-to-use multilanguage interface. Built-in player.
                    </p>
                </div>
                <div class="d-flex flex-column" style="gap: 12px;">
                    <h5>
                        Apoiados:
                    </h5>
                    <a href="" class="text-white">
                        Adblock (Código-Aberto)
                    </a>

                    <a href="" class="text-white">
                        Mozilla (Fundaresponsável pelo Firefox)
                    </a>
                </div>
            </article>
            <section class="comments-section mt-5">
                <h2 class="text-uppercase fs-4 mb-4">Deixe seu recado</h2>
                <textarea name="Comentário" id="" class="d-flex text-white">Comentário...</textarea>
            </section>

        </section>
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
    </main>
<?php get_footer(); ?>