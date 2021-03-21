<?php
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );

load_theme_textdomain('baltic-theme', get_template_directory().'/languages');

/**
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support('title-tag');


/**
 * Load styles and scripts.
 */
function baltic_include_styles_scripts()
{
    // Style
    wp_enqueue_style('baltic-script', get_template_directory_uri() . '/style.css');

    // Scripts
    wp_enqueue_script('baltic-script', get_template_directory_uri() . '/dist/js/app.js', [], false, true);
}

add_action('wp_enqueue_style', 'baltic_include_styles_scripts');
add_action('wp_enqueue_scripts', 'baltic_include_styles_scripts');


/**
 * Register menus.
 */
function baltic_register_nav_menu()
{
    register_nav_menus([
        'menu-superior' => 'Menu navigazione alto',
    ]);
}

add_action('after_setup_theme', 'baltic_register_nav_menu', 0);


/**
 * Register Bootstrap NavWalker.
 */
function baltic_include_navwalker()
{
    require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'baltic_include_navwalker');


/**
 * Register image sizes.
 */
function baltic_setup_image_sizes()
{
    add_theme_support('post-thumbnails');

    add_image_size('slider-hero-image', 1920, 700, true);
    add_image_size('intro-image', 700, 500, true);
    add_image_size('slider-offer-image', 1280, 800, true);
    add_image_size('slider-strengths-image', 850, 600, true);
}

add_action('after_setup_theme', 'baltic_setup_image_sizes');


/**
 * Register ACF option page.
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Opzioni',
        'menu_title' => 'Opzioni',
    ]);
}

/**
 * Rimuove lo script e style type per W3C.
 */
add_action('after_setup_theme', function () {
    add_theme_support('html5', ['script', 'style']);
});


/**
 * Disabilita la creazione di url superflui
 */
add_filter('author_rewrite_rules', fn() => []);
add_filter('date_rewrite_rules', fn() => []);
add_filter('category_rewrite_rules', fn() => []);
add_filter('tag_rewrite_rules', fn() => []);
add_filter('comments_rewrite_rules', fn() => []);
add_filter('search_rewrite_rules', fn() => []);


/**
 * Disabilita archivi, attachment e ricerca
 */
add_action('template_redirect', function () {
    if (!is_archive() && !is_attachment() && !is_search()) {
        return;
    }

    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    nocache_headers();
    include(get_404_template());
    exit;
});


/**
 * Nascondono dei link o meta nel wp_head
 */
remove_action('wp_head', 'wp_generator');                                       // Nascondo generator
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);         // Nascondo post adiacenti (next prev)
remove_action('wp_head', 'rsd_link');                                           // Nascondo rsd
remove_action('wp_head', 'wlwmanifest_link');                                   // Nascondo wlw
remove_action('wp_head', 'index_rel_link');                                     // Nascondo rel link
remove_action('wp_head', 'feed_links', 2);                               // Nascondo rss primari
remove_action('wp_head', 'feed_links_extra', 3);                         // Nascondo rss secondari
remove_action('wp_head', 'rest_output_link_wp_head', 10);                // Nascondo API rest
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);           // Nascondo wp_oembed


/**
 * Crediti ComodoLab nell admin
 */
add_filter('admin_footer_text', function () {
    return '<span id="footer-thankyou">Powered by <a href="http://www.comodolab.it">comodolab.it</a></span>';
});


/**
 * Move jQuery to the footer.
 */
function baltic_enqueue_scripts()
{
    wp_scripts()->add_data('jquery', 'group', 1);
    wp_scripts()->add_data('jquery-core', 'group', 1);
    wp_scripts()->add_data('jquery-migrate', 'group', 1);
}

add_action('wp_enqueue_scripts', 'baltic_enqueue_scripts');


/**
 * Remove <p> and <br/> from Contact Form 7
 */
add_filter('wpcf7_autop_or_not', '__return_false');



/**
 * Add Custom Post Type
 */
add_action('init', function () {
    $cpts = [
        'offer' => [
            'plural'   => 'Offerte',
            'singular' => 'Offerta',
            'icon'     => 'dashicons-palmtree',
        ],
        'review' => [
            'plural'   => 'Recensioni',
            'singular' => 'Recensione',
            'icon'     => 'dashicons-editor-quote',
        ],
    ];

    foreach ($cpts as $postType => $data) {
        register_post_type($postType, [
            'labels'      => [
                'name'          => $data['plural'],
                'singular_name' => $data['singular'],
            ],
            'public'      => true,
            'has_archive' => false,
            'supports'    => ['title', 'editor', 'thumbnail', 'revisions'],
            'menu_icon'   => $data['icon'],
        ]);
    }
});
