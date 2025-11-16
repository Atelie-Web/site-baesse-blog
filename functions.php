<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Suporte ao tema
function site_baesse_blog_setup()
{
    // Suporte a thumbnails
    add_theme_support('post-thumbnails');

    // Suporte a titles tags
    add_theme_support('title-tag');

    // Suporte a menus
    add_theme_support('menus');

    // Suporte a widgets
    add_theme_support('widgets');

    // Registrar menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'site-baesse-blog'),
        'footer' => __('Menu Footer', 'site-baesse-blog')
    ));

    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Suporte a custom background
    add_theme_support('custom-background');

    // Suporte a custom header
    add_theme_support('custom-header');
}
add_action('after_setup_theme', 'site_baesse_blog_setup');

function site_baesse_blog_enqueue_assets()
{
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        [],
        '5.3.8'
    );

    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css',
        [],
        '7.0.1'
    );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=REM:ital,wght@0,100..900;1,100..900&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'site-baesse-blog-style',
        get_stylesheet_uri(),
        ['bootstrap', 'fontawesome', 'google-fonts'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.8',
        true
    );
}
add_action('wp_enqueue_scripts', 'site_baesse_blog_enqueue_assets');

// Função para registrar áreas de widgets baseadas no que já existe
function site_baesse_blog_widgets_init()
{
    // Default Sidebar (já existe no seu site)
    register_sidebar(array(
        'name'          => __('Default Sidebar', 'site-baesse-blog'),
        'id'            => 'default-sidebar',
        'description'   => __('Sidebar principal do site que aparece nas páginas do blog', 'site-baesse-blog'),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-4">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title h5 text-white mb-3">',
        'after_title'   => '</h3>',
    ));

    // Footer Widget Area (já existe no seu site)
    register_sidebar(array(
        'name'          => __('Footer', 'site-baesse-blog'),
        'id'            => 'footer',
        'description'   => __('Área de widgets do rodapé', 'site-baesse-blog'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s col-md-4 mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title text-white mb-3">',
        'after_title'   => '</h4>',
    ));

    // Header Widget Area (opcional - se quiser widgets no header)
    register_sidebar(array(
        'name'          => __('Header Widgets', 'site-baesse-blog'),
        'id'            => 'header-widgets',
        'description'   => __('Área para widgets no header', 'site-baesse-blog'),
        'before_widget' => '<div id="%1$s" class="header-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="screen-reader-text">',
        'after_title'   => '</span>',
    ));

    // Sidebar Secundária (caso precise de mais áreas)
    register_sidebar(array(
        'name'          => __('Sidebar Secundária', 'site-baesse-blog'),
        'id'            => 'secondary-sidebar',
        'description'   => __('Sidebar adicional para páginas específicas', 'site-baesse-blog'),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-4">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title h5 text-white mb-3">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'site_baesse_blog_widgets_init');

// Função para personalizar o template dos comentários
function site_baesse_blog_comment_template($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
?>
    <li <?php comment_class('comment-item mb-4 pb-3 border-bottom border-gray-1'); ?> id="comment-<?php comment_ID(); ?>">
        <div class="comment-author d-flex align-items-center mb-2">
            <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size'], '', '', array('class' => 'rounded-circle me-3')); ?>
            <div>
                <strong class="text-white"><?php echo get_comment_author_link(); ?></strong>
                <small class="text-gray-2 ms-2">
                    <i class="fa-regular fa-calendar me-1"></i>
                    <?php printf(__('%1$s às %2$s', 'site-baesse-blog'), get_comment_date('d/m/Y'), get_comment_time()); ?>
                </small>
            </div>
        </div>

        <div class="comment-content text-white ms-5">
            <?php if ($comment->comment_approved == '0') : ?>
                <em class="text-gray-3"><?php _e('Seu comentário está aguardando moderação.', 'site-baesse-blog'); ?></em>
            <?php endif; ?>

            <?php comment_text(); ?>

            <div class="comment-reply mt-2">
                <?php
                comment_reply_link(array_merge($args, array(
                    'depth' => $depth,
                    'max_depth' => $args['max_depth'],
                    'reply_text' => '<small class="text-red-400"><i class="fa-solid fa-reply me-1"></i>Responder</small>',
                    'login_text' => '<small class="text-gray-2">Faça login para responder</small>'
                )));
                ?>
            </div>
        </div>
    </li>
<?php
}

// Suporte para os plugins que você tem instalados
function site_baesse_blog_plugins_support()
{
    // Suporte para WP Dark Mode (se estiver usando)
    if (class_exists('WP_Dark_Mode')) {
        // Código de integração opcional com WP Dark Mode
    }

    // Suporte para Jetpack (já está ativo no seu site)
    if (class_exists('Jetpack')) {
        add_theme_support('jetpack-responsive-videos');
    }
}
add_action('after_setup_theme', 'site_baesse_blog_plugins_support');
