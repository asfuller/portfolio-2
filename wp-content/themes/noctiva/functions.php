<?php
if ( ! function_exists( 'noctiva_setup' ) ) :
function noctiva_setup() {
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor-styles.css' );
}
endif;
add_action( 'after_setup_theme', 'noctiva_setup' );

function noctiva_theme_setup() {
    load_theme_textdomain( 'noctiva', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'noctiva_theme_setup' );

function noctiva_enqueue_styles_and_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'noctiva-normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0' );
    wp_enqueue_style( 'noctiva-blocks-style', get_template_directory_uri() . '/assets/css/block.css', array(), '1.0' );
    wp_enqueue_style( 'noctiva-style-css', get_stylesheet_uri(), array(), $theme_version );

    wp_enqueue_script( 'noctiva-custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'noctiva_enqueue_styles_and_scripts' );

require_once get_template_directory() . '/inc/core/init.php';
require get_template_directory() . '/inc/customizer.php';

if ( class_exists( 'WP_Customize_Section' ) ) {
    class Noctiva_Upsell_Section extends WP_Customize_Section {
        public $type = 'noctiva-upsell';
        public $button_text = '';
        public $url = '';
        public $background = '';
        public $text_color = '';

        protected function render() {
            $background = ! empty( $this->background ) ? esc_attr( $this->background ) : '#037e74';
            $text_color = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
            ?>
            <li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="noctiva_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
                <h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
                    <?php echo esc_html( $this->title ); ?>
                    <a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
                </h3>
            </li>
            <?php
        }
    }
}

require get_template_directory() . '/inc/get-started/get-started.php';

function noctiva_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'noctiva_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if ( ! $meta ) {
        if ( is_network_admin() || ! current_user_can( 'manage_options' ) ) return;
        if ( $current_screen->base != 'appearance_page_noctiva-guide-page' ) {
            ?>
            <div class="notice notice-success is-dismissible">
                <p>⭐⭐⭐⭐⭐</p>
                <h1><?php esc_html_e('Thanks for choosing Noctiva!', 'noctiva'); ?></h1>
                <p>Unlock exclusive features, advanced customization options, and premium support to take your site to the next level. Get started today and experience the full potential of the <b>Noctiva PRO</b>!</p>
                <div style="display: flex;">
                    <p>
                        <a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=noctiva-guide-page' ) ); ?>"><?php esc_html_e('Get Started', 'noctiva'); ?></a>
                    </p>
                    <p><a href="?noctiva-dismissed" class="button button-secondary"><?php echo esc_html('Dismiss', 'noctiva'); ?></a></p>
                </div>
            </div>
            <?php
        }
    }
}
add_action( 'admin_notices', 'noctiva_admin_notice' );

function noctiva_notice_dismissed() {
    if ( isset( $_GET['noctiva-dismissed'] ) )
        update_option( 'noctiva_admin_notice', true );
}
add_action( 'admin_init', 'noctiva_notice_dismissed' );

if ( ! function_exists( 'noctiva_update_admin_notice' ) ) :
function noctiva_update_admin_notice() {
    if ( isset( $_GET['noctiva_admin_notice'] ) && $_GET['noctiva_admin_notice'] == '1' ) {
        update_option( 'noctiva_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'noctiva_update_admin_notice' );

add_action( 'after_switch_theme', 'noctiva_getstart_setup_options' );
function noctiva_getstart_setup_options () {
    update_option( 'noctiva_admin_notice', false );
}

// Link constants without translations
define('NOCTIVA_BUY_NOW', 'https://effethemes.com/themes/noctiva-wordpress-theme/');
define('NOCTIVA_PRO_DEMO', 'https://preview.effethemes.com/noctiva-wordpress-theme/');
define('NOCTIVA_REVIEW', 'https://wordpress.org/support/theme/noctiva/reviews/#new-post');
define('NOCTIVA_SUPPORT', 'https://wordpress.org/support/theme/noctiva');
