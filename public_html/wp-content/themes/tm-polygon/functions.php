<?php
/**
 * tm_polygon functions and definitions
 *
 * @package tm_polygon
 */

if ( ! function_exists( 'tm_polygon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 * ===========================================================================
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tm_polygon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tm_polygon, use a find and replace
		 * to change 'tm-polygon' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'tm-polygon', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'tm-polygon-post-thumb', 770, 494, true );
		add_image_size( 'tm-polygon-small-thumb', 120, 90, true );
		add_image_size( 'tm-polygon-medium-thumb', 600, 385, true );
		add_image_size( 'tm-polygon-related-thumb', 370, 370, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'tm-polygon' ),
			'social'  => esc_html__( 'Social Profile Menu', 'tm-polygon' ),
			'top'     => esc_html__( 'Top Menu', 'tm-polygon' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array( 'gallery', 'image', 'video', 'quote' ) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tm_polygon_custom_background_args', array(
			'default-color' => '#ffffff',
			'default-image' => '',
		) ) );

		// Support woocommerce
		add_theme_support( 'woocommerce' );
	}
endif; // tm_polygon_setup
add_action( 'after_setup_theme', 'tm_polygon_setup' );


/**
 * search_filter
 * ================
 */
function tm_polygon_search_filter( $query ) {
	if ( is_search() && ( ! isset( $query->query_vars['post_type'] ) ) ) {
		$query->set( 'post_type', array( 'post' ) );
	}
}

add_action( 'pre_get_posts', 'tm_polygon_search_filter' );

/**
 * Define Constants
 * ================
 */
define( 'TM_POLYGON_THEME_ROOT', esc_url( get_template_directory_uri() ) );
define( 'TM_POLYGON_PARENT_THEME_NAME', wp_get_theme( 'tm-polygon' )->get( 'Name' ) );
define( 'TM_POLYGON_PARENT_THEME_VERSION', wp_get_theme( 'tm-polygon' )->get( 'Version' ) );
define( 'TM_POLYGON_PARENT_THEME_AUTHOR', wp_get_theme( 'tm-polygon' )->get( 'Author' ) );

define( 'TM_POLYGON_PRIMARY_FONT', 'Lato' );
define( 'TM_POLYGON_PRIMARY_COLOR', '#1674D1' );
define( 'TM_POLYGON_SECONDARY_COLOR', '#FFFFFF' );

define( 'TM_POLYGON_PORTFOLIO_TYPE', 'project' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * ===========================================================================
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

/**
 * Register widget area.
 * ====================
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function tm_polygon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tm-polygon' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>'
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Top Left', 'tm-polygon' ),
		'id'            => 'top-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget top-left %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>'
	) );

	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar for shop', 'tm-polygon' ),
			'id'            => 'sidebar-shop',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>'
		) );
	}
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1 Widget Area', 'tm-polygon' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2 Widget Area', 'tm-polygon' ),
		'id'            => 'footer2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3 Widget Area', 'tm-polygon' ),
		'id'            => 'footer3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4 Widget Area', 'tm-polygon' ),
		'id'            => 'footer4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
}

add_action( 'widgets_init', 'tm_polygon_widgets_init' );

/**
 * Enqueue scripts and styles.
 * ==========================
 */
function tm_polygon_scripts() {
	wp_enqueue_style( 'tm-polygon-style', TM_POLYGON_THEME_ROOT . '/style.css' );
	wp_enqueue_style( 'tm-polygon-main', TM_POLYGON_THEME_ROOT . '/css/main.css' );
	wp_enqueue_style( 'tm-polygon-font-awesome', TM_POLYGON_THEME_ROOT . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'tm-polygon-pe-icon-7-stroke', TM_POLYGON_THEME_ROOT . '/css/pe-icon-7-stroke.css' );
	wp_enqueue_style( 'tm-polygon-pe-icon-7-helper', TM_POLYGON_THEME_ROOT . '/css/helper.css' );

	if ( Kirki::get_option( 'tm-polygon', 'nav_sticky_enable' ) == 1 ) {
		wp_enqueue_script( 'tm-polygon-js-head-room-jquery', TM_POLYGON_THEME_ROOT . '/js/jQuery.headroom.min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
		wp_enqueue_script( 'tm-polygon-js-head-room', TM_POLYGON_THEME_ROOT . '/js/headroom.min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	}

	wp_register_style( 'tm-polygon-swipebox', TM_POLYGON_THEME_ROOT . '/js/swipebox/css/swipebox.min.css' );
	wp_register_script( 'tm-polygon-swipebox', TM_POLYGON_THEME_ROOT . '/js/swipebox/js/jquery.swipebox.min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );

	wp_enqueue_script( 'tm-polygon-js-snap', TM_POLYGON_THEME_ROOT . '/js/snap.min.js', array(), TM_POLYGON_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-polygon-js-owl-carousel', TM_POLYGON_THEME_ROOT . '/js/owl.carousel.min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-polygon-js-waypoint', TM_POLYGON_THEME_ROOT . '/js/waypoints.min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-polygon-js-counterup', TM_POLYGON_THEME_ROOT . '/js/jquery.counterup.min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-polygon-js-jquery-plugin', TM_POLYGON_THEME_ROOT . '/js/jquery.plugin.min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-polygon-js-countdown', TM_POLYGON_THEME_ROOT . '/js/jquery.countdown.min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-polygon-js-scroll-reveal', TM_POLYGON_THEME_ROOT . '/js/scrollReveal.min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-polygon-js-matchheight', TM_POLYGON_THEME_ROOT . '/js/jquery.matchHeight-min.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-polygon-js-fitvids', TM_POLYGON_THEME_ROOT . '/js/jquery.fitvids.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-polygon-js-main', TM_POLYGON_THEME_ROOT . '/js/main.js', array( 'jquery' ), TM_POLYGON_PARENT_THEME_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'tm_polygon_scripts' );

/**
 * Setup custom css.
 * ================
 */
function tm_polygon_custom_css() {
	$logo                 = Kirki::get_option( 'tm-polygon', 'site_logo' );
	$tm_polygon_custom_css  = Kirki::get_option( 'tm-polygon', 'custom_css' );
	$tm_polygon_custom_css .= '.custom-logo { background-image: url("'. esc_attr($logo) .'") }';
	if ( Kirki::get_option( 'tm-polygon', 'custom_css_enable' ) == 1 ) {
		wp_add_inline_style( 'tm-polygon-main', $tm_polygon_custom_css );
	}
}

add_action( 'wp_enqueue_scripts', 'tm_polygon_custom_css' );

/**
 * Implement other setup.
 * ======================
 */
// Load core
require_once get_template_directory() . '/core/initial.php';
require_once get_template_directory() . '/inc/customizer/customizer.php';
require_once get_template_directory() . '/inc/oneclick.php';

// Theme Hook Alliance
require_once get_template_directory() . '/inc/tha-theme-hooks.php';

// Load tmg
require_once get_template_directory() . '/inc/tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/tgm-plugin-registration.php';

// Load metabox
require_once get_template_directory() . '/inc/meta-box.php';

// Load custom js
require_once get_template_directory() . '/inc/custom-js.php';

// Load custom header
require_once get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require_once get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require_once get_template_directory() . '/inc/extras.php';

// Post-like
require_once get_template_directory() . '/inc/post-like.php';

// Load Jetpack compatibility file.
require_once get_template_directory() . '/inc/jetpack.php';

// Support shortcode in widget
add_filter( 'widget_text', 'do_shortcode' );

// Remove admin notification of Projects
if ( class_exists( 'Projects_Admin' ) ) {
	global $projects;
	remove_action( 'admin_notices', array( $projects->admin, 'configuration_admin_notice' ) );
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
// Extend VC
if ( class_exists( 'WPBakeryVisualComposerAbstract' ) ) {
	function tm_polygon_requireVcExtend() {
		require get_template_directory() . '/inc/vc-extend.php';
	}

	add_action( 'init', 'tm_polygon_requireVcExtend', 2 );
}

// Adding new field for Quote Post Format
if ( ! function_exists( 'tm_polygon_add_quote_text_field' ) ) {
	function tm_polygon_add_quote_text_field() {
		global $post;
		?>
		<div class="vp-pfui-elm-block">
			<label for="vp-pfui-format-quote-text"><?php esc_html_e( 'Quote', 'tm-polygon' ); ?></label>

      <textarea name="_format_quote_text" id="vp-pfui-format-quote-text" cols="30"
                rows="10"><?php echo esc_attr( get_post_meta( $post->ID, '_format_quote_text', true ) ); ?></textarea>

		</div>
		<?php
	}

	add_action( 'vp_pfui_after_quote_meta', 'tm_polygon_add_quote_text_field' );
}

if ( ! function_exists( 'tm_polygon_add_gallery_type_field' ) ) {
	function tm_polygon_add_gallery_type_field() {
		global $post;
		$type = get_post_meta( $post->ID, '_format_gallery_type', true );
		if ( ! $type ) {
			$type = 'slider';
		}
		?>
		<div class="vp-pfui-elm-block">
			<label for="vp-pfui-format-gallery-type"><?php esc_html_e( 'Gallery Type', 'tm-polygon' ); ?></label>
			<input type="radio" name="_format_gallery_type" value="slider"
			       id="slider" <?php checked( $type, "slider" ); ?>><label style="display: inline-block; padding:0 10px 0 0;"
			                                                               for="slider"><?php esc_html_e( 'Slider', 'tm-polygon' ); ?></label>
			<input type="radio" name="_format_gallery_type" value="masonry"
			       id="masonry" <?php checked( $type, "masonry" ); ?>><label
				style="display: inline-block; padding:0 10px 0 0;" for="masonry"><?php esc_html_e( 'Masonry', 'tm-polygon' ); ?></label>
		</div>
		<?php
	}

	add_action( 'vp_pfui_after_gallery_meta', 'tm_polygon_add_gallery_type_field' );
}

add_action( 'admin_init', 'tm_polygon_admin_init' );

function tm_polygon_admin_init() {
	$post_formats = get_theme_support( 'post-formats' );
	if ( ! empty( $post_formats[0] ) && is_array( $post_formats[0] ) ) {
		if ( in_array( 'quote', $post_formats[0] ) ) {
			add_action( 'save_post', 'tm_polygon_custom_save_post' );
		}
	}
}

function tm_polygon_custom_save_post( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! defined( 'XMLRPC_REQUEST' ) ) {
		if ( isset( $_POST['_format_quote_text'] ) ) {
			update_post_meta( $post_id, '_format_quote_text', $_POST['_format_quote_text'] );
		}
		if ( isset( $_POST['_format_gallery_type'] ) ) {
			update_post_meta( $post_id, '_format_gallery_type', $_POST['_format_gallery_type'] );
		}
	}
}