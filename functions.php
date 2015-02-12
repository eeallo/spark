<?php

// Register styles and scripts
function spark_register_styles()  
{  
    wp_enqueue_style( 'normalize', '//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css' );
//    wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'toast-grid', get_template_directory_uri() . '/css/toast-grid.css' );
	wp_enqueue_style( 'spark-style', get_stylesheet_uri() );		// Load our main stylesheet. 								
    wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' );
}  
add_action( 'wp_enqueue_scripts', 'spark_register_styles' );  


// Register sidebars
function spark_register_sidebars() {
	register_sidebar( array(
		'name'         	=> __( 'Primary Sidebar', 'spark' ),
		'id'        	=> 'sidebar-primary',
		'description'   => __( 'Is at the right middle side of the theme', 'spark' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	) );
	register_sidebar( array(
		'name'      	=> __( 'Footer Sidebar', 'spark' ),
		'id'         	=> 'sidebar-footer',
		'description'   => __( 'Is at the footer of the theme', 'spark' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s grid__col grid__col--1-of-4">',
		'after_widget'  => '</article>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	) );	
 }
add_action( 'widgets_init', 'spark_register_sidebars');


// Register menus
function spark_register_menus() {
	register_nav_menu( 'primary', __( 'Primary Menu' ) );
}
add_action( 'init', 'spark_register_menus' );


// Enable theme features
add_theme_support( 'custom-background' );												

$args = array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'
);
add_theme_support( 'html5', $args );


// Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );


// Create a more specific title element text for output in head of document, based on current view.
/**
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function spark_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'spark' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'spark_wp_title', 10, 2 );