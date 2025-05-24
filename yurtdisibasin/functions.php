<?php
/**
 * Yurtdisi Basin Theme functions and definitions
 */

// Tema kurulumu
function yurtdisibasin_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'yurtdisibasin'),
        'footer'  => esc_html__('Footer Menu', 'yurtdisibasin'),
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'yurtdisibasin_setup');


// Stil ve script yüklemeleri
function yurtdisibasin_scripts() {
    // ─── ANA STİLLER ───
    wp_enqueue_style('yurtdisibasin-style', get_stylesheet_uri(), array(), '1.0.1');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.0.0');

    // Lightbox CSS
    wp_enqueue_style('lightbox-css', 'https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css', array(), '2.11.3');

    // Tema’nın özel CSS’i (assets/css/style.css)
    $css_file_path = get_template_directory() . '/assets/css/style.css';
    $css_file_uri  = get_template_directory_uri() . '/assets/css/style.css';
    if ( file_exists( $css_file_path ) ) {
        wp_enqueue_style('yurtdisibasin-custom-style', $css_file_uri, array(), '20240610');
    }

    // ─── DATATABLES ENQUEUE ───
    wp_enqueue_style('datatables', 'https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css', array(), '1.13.4');
    wp_enqueue_style('datatables-responsive', 'https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css', array(), '2.4.1');

    // jQuery (WP’de zaten mevcut)
    wp_enqueue_script('jquery');

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array('jquery'), '10.0.0', true);

    // Lightbox JS
    wp_enqueue_script('lightbox-js', 'https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js', array('jquery'), '2.11.3', true);

    // DataTables JS
    wp_enqueue_script('datatables', 'https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js', array('jquery'), '1.13.4', true);
    wp_enqueue_script('datatables-responsive', 'https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js', array('datatables'), '2.4.1', true);

    // Tema’nın ana JS’i (assets/js/main.js)
    $js_file_path = get_template_directory() . '/assets/js/main.js';
    $js_file_uri  = get_template_directory_uri() . '/assets/js/main.js';
    if ( file_exists( $js_file_path ) ) {
        wp_enqueue_script('yurtdisibasin-main', $js_file_uri, array('jquery', 'swiper-js', 'lightbox-js', 'datatables', 'datatables-responsive'), '20240610', true);
    }

    // Eğer kök dizinine ekleyeceğiniz bir script.js varsa (DataTables init kodunuz burada)
    // wp_enqueue_script('yurtdisibasin-datatables-init', get_template_directory_uri() . '/script.js', array('jquery','datatables','datatables-responsive'), '1.0.0', true);

    // Yorum yanıtlama script’i
    if ( is_singular() && comments_open() && get_option('thread_comments') ) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'yurtdisibasin_scripts');


// Widget alanı kaydı
function yurtdisibasin_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'yurtdisibasin'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'yurtdisibasin'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'yurtdisibasin_widgets_init');


// Template tag’leri
if ( ! function_exists('yurtdisibasin_posted_on') ) :
    function yurtdisibasin_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date('c')),
            esc_html(get_the_date())
        );
        echo '<span class="posted-on">' . $time_string . '</span>';
    }
endif;

if ( ! function_exists('yurtdisibasin_posted_by') ) :
    function yurtdisibasin_posted_by() {
        $byline = sprintf(
            esc_html_x('by %s', 'post author', 'yurtdisibasin'),
            '<span class="author vcard"><a class="url fn n" href="' .
            esc_url(get_author_posts_url(get_the_author_meta('ID'))) .
            '">' . esc_html(get_the_author()) . '</a></span>'
        );
        echo '<span class="byline"> ' . $byline . '</span>';
    }
endif;

// Geriye dönük wp_body_open
if ( ! function_exists('wp_body_open') ) :
    function wp_body_open() {
        do_action('wp_body_open');
    }
endif;

// Güvenlik başlıkları
function yurtdisibasin_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}
add_action('send_headers', 'yurtdisibasin_security_headers');
