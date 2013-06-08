<?php 

function register_all(){
	/*******注册侧边栏*****/
	register_sidebar(array(
	'name' => __( 'Sidebar Widget Area', 'blue-modern'),
	'id' => 'sidebar-widget-area',
	'description' => __( 'The sidebar widget area', 'blue-modern'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
	
	/*******注册导航*****/
	register_nav_menus( 
        array( 
            'header-menu' => esc_attr__('Main Menu', 'firmasite'), 
            'footer-menu' => __( '底部菜单' ), 
        ) 
    ); 
}


?>