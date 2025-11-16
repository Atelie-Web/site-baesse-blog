<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBAESSE</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="container py-3">
        <div class="d-flex justify-content-between align-items-center">

            <!-- Área de Widgets do Header -->
            <?php if (is_active_sidebar('header-widgets')) : ?>
                <?php dynamic_sidebar('header-widgets'); ?>
            <?php else : ?>
                <!-- Conteúdo padrão (seu header original) -->
                <h2 class="m-0"><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name'); ?></a></h2>

                <!-- Menu Principal Dinâmico -->
                <nav class="d-none d-lg-flex align-items-center gap-4">
                    <?php
                    // Menu dinâmico - pega todas as páginas + home
                    $pages = get_pages(array(
                        'sort_column' => 'menu_order',
                        'sort_order' => 'ASC'
                    ));

                    // Lista todas as páginas, filtrando as que não devem aparecer
                    foreach ($pages as $page) {
                        // Palavras que NÃO devem aparecer no menu
                        $excluded_words = array('resultado', 'search', 'busca', 'resultados');
                        $page_title = $page->post_title;
                        $should_exclude = false;

                        // Verifica se o título contém alguma palavra excluída
                        foreach ($excluded_words as $word) {
                            if (stripos($page_title, $word) !== false) {
                                $should_exclude = true;
                                break;
                            }
                        }

                        // Só exibe se não contém palavras excluídas
                        if (!$should_exclude) {
                            echo '<a href="' . esc_url(get_permalink($page->ID)) . '">'
                                . esc_html($page_title)
                                . '</a>';
                        }
                    }
                    ?>
                </nav>

                <!-- Formulário de Busca FUNCIONAL -->
                <form class="d-none d-md-flex align-items-center gap-2" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search"
                        name="s"
                        class="form-control form-control-sm"
                        style="width: 150px; border: none; border-bottom: 1px solid white; background: transparent; color: white;"
                        value="<?php echo get_search_query(); ?>">
                    <button type="submit" class="btn btn-link text-white p-0">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>

                <!-- Menu Mobile -->
                <div class="d-flex d-lg-none gap-2 align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
                        aria-controls="offcanvasMenu">
                        <i class="fa-solid fa-bars"></i>
                    </button>

                    <button class="btn btn-search-mobile" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            <?php endif; ?>
        </div>

        <!-- Busca Mobile FUNCIONAL -->
        <div class="collapse w-100 mt-2" id="mobileSearch">
            <div class="search-collapse">
                <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="d-flex">
                        <input class="form-control me-2"
                            type="search"
                            name="s"
                            placeholder="Buscar..."
                            aria-label="Buscar"
                            value="<?php echo get_search_query(); ?>">
                        <button class="btn btn-outline-success" type="submit">OK</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Offcanvas Menu Dinâmico -->
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasMenu"
            aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Fechar"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <?php
                    // Menu mobile dinâmico - pega todas as páginas + home
                    $pages = get_pages(array(
                        'sort_column' => 'menu_order',
                        'sort_order' => 'ASC'
                    ));

                    // Adiciona a Home manualmente
                    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/')) . '">HOME</a></li>';

                    // Lista todas as páginas, filtrando as que não devem aparecer
                    foreach ($pages as $page) {
                        // Palavras que NÃO devem aparecer no menu
                        $excluded_words = array('resultado', 'search', 'busca', 'resultados');
                        $page_title = $page->post_title;
                        $should_exclude = false;

                        // Verifica se o título contém alguma palavra excluída
                        foreach ($excluded_words as $word) {
                            if (stripos($page_title, $word) !== false) {
                                $should_exclude = true;
                                break;
                            }
                        }

                        // Só exibe se não contém palavras excluídas
                        if (!$should_exclude) {
                            echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(get_permalink($page->ID)) . '">'
                                . esc_html($page_title)
                                . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>