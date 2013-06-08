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


//分页

function pagination($query_string){   
global $posts_per_page, $paged;   
$my_query = new WP_Query($query_string ."&posts_per_page=-1");   
$total_posts = $my_query->post_count;   
if(empty($paged))$paged = 1;   
$prev = $paged - 1;   
$next = $paged + 1;   
$range = 2; // only edit this if you want to show more page-links   
$showitems = ($range * 2)+1;   
  
$pages = ceil($total_posts/$posts_per_page);   
if(1 != $pages){   
echo "<div class='pagination' data-role=\"controlgroup\"  data-type=\"horizontal\"  data-mini=\"true\" >" ;   
echo ($paged > 2 && $paged+$range+1 > $pages && $showitems < $pages)? "<a href='".get_pagenum_link(1)."'>最前</a>":"";   
echo ($paged > 1 && $showitems < $pages)? "<a href='".get_pagenum_link($prev)."'data-role=\"button\">上一页</a>":"";   
  
for ($i=1; $i <= $pages; $i++){   
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){   
echo ($paged == $i)? "<span class='current' data-role=\"button\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' data-role=\"button\">".$i."</a>";   
}   
}   
  
echo ($paged < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($next)."' data-role=\"button\">下一页</a>" :"";   
echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."' data-role=\"button\">最后</a>":"";   
echo "</div>\n";   
}   
}  


?>