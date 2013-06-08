<?php
if ( ! isset( $content_width ) )
$content_width = 640;

add_action( 'after_setup_theme', 'blue_modern_setup' );


function blue_modern_setup() {

add_editor_style();
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

set_post_thumbnail_size( 120, 120, true ); // Default size

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain('blue-modern', get_template_directory() . '/languages');
	
}

function blue_modern_widgets() {

register_sidebar(array(
	'name' => __( 'Sidebar Widget Area', 'blue-modern'),
	'id' => 'sidebar-widget-area',
	'description' => __( 'The sidebar widget area', 'blue-modern'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
}

add_action ( 'widgets_init', 'blue_modern_widgets' );

//Multi-level pages menu
function blue_modern_page_menu() {
	if (is_page()) { $highlight = "page_item"; } else {$highlight = "menu-item current-menu-item"; }
	echo '<ul class="menu">';
	wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=3');
	echo '</ul>';
}

//Single-level pages menu
function blue_modern_page_menu_flat() {
	if (is_page()) { $highlight = "page_item"; } else {$highlight = "menu-item current-menu-item"; }
	echo '<ul class="menu">';
	wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=1');
	echo '</ul>';
}
//添加导航菜单
add_action( 'init', 'register_my_menus' ); 
function register_my_menus() { 
    register_nav_menus( 
        array( 
            'header-menu' => __( '导航菜单' ), 
            'footer-menu' => __( '底部菜单' ), 
        ) 
    ); 
}


//导航菜单兼容jquery

?>