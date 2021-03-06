<?php
/**
 * hiencucvang functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hiencucvang
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'hiencucvang_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hiencucvang_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hiencucvang, use a find and replace
		 * to change 'hiencucvang' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hiencucvang', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'hiencucvang' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'hiencucvang_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'hiencucvang_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hiencucvang_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hiencucvang_content_width', 640 );
}
add_action( 'after_setup_theme', 'hiencucvang_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hiencucvang_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hiencucvang' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hiencucvang' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hiencucvang_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hiencucvang_scripts() {
	wp_enqueue_style( 'hiencucvang-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hiencucvang-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hiencucvang-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hiencucvang_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// function theme_body_classes( $classes ) {
//     global $post;

//     if( is_object( $post ) ) {
//         $classes[] = $post->post_name;
//         $classes[] = "{$post->post_type}-{$post->post_name}";
//     }

//     return $classes;
// }
// add_filter( 'body_class', 'theme_body_classes' );



// add_filter( "wpo_custom_product_search", function($results,$query_args,$term) {
// 	global $wpdb;
// 	$term = esc_sql($wpdb->esc_like($term));
// 	$results = $wpdb->get_col("SELECT ID FROM $wpdb->posts WHERE post_type='post' AND post_status='publish' AND post_title LIKE '%{$term}%'  
// 							  OR ID IN (SELECT post_id FROM $wpdb->postmeta WHERE meta_key='_sku' AND meta_value LIKE '%{$term}%' )
// 							  ORDER BY post_title LIMIT 25");
// 	return $results;
//    },10,3);

function search_by_title_only($search, &$query){
	global $wpdb;
	if(empty($search)) {
		return $search;
	}
	$q = $query->query_vars;
	//var_dump($query);
	$n = !empty($q['exact']) ? '' : '%';
	$search =
	$and = '';
	foreach ((array)$q['search_terms'] as $term) {
		$term = esc_sql($wpdb->esc_like($term));
		$search .= "{$and}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
		$and = ' AND ';
	}
	if (!empty($search)) {
		$search = " AND ({$search}) ";
	}
	//var_dump($wp_query);
	//var_dump($wp_query);
	return $search;
}
add_filter('posts_search', 'search_by_title_only', 999, 2);
//cai nay de show sql
//add_filter( 'posts_request', 'var_dump_request' );
function var_dump_request($sql) {
    var_dump($sql);
    return $sql;
}

function the_breadcrumb() {
	echo '<ul class="breadcrumb">';
if (!is_home()) {
	echo '<li><a href="';
	echo get_option('home');
	echo '">';
	echo 'Trang chủ';
	echo "</a></li>";
	 if (is_category() || is_single()) {
			// echo '<span>›</span><li>';
			echo '<li>';
			the_category (' </li><li> ');
			if (is_single()) {
					echo "<li>";
					the_title();
					echo '</li>';
			}
	} elseif (is_page()) {
			// echo '<span>›</span><li>';
			echo '<li>';
			echo the_title();
			echo '</li>';
	}
}
elseif (is_tag()) {single_tag_title();}
elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
echo '</ul>';
}

