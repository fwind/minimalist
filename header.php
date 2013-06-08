<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable = no">
  <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?>
    </title>









<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery.mobile-1.3.1.css" />
<!-------------- 基础css---------- -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/menu.css" type="text/css" media="screen" />
<!-------------- 头部多级菜单css---------- -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="stylesheet" media="screen and (min-width: 750px)" href="<?php bloginfo('template_url'); ?>/jquery.desktop.css" />
<!--------------大屏幕css---------- -->
<link rel="stylesheet" media="screen and (max-width: 750px)" href="<?php bloginfo('template_url'); ?>/jquery.mobile.css" />
<!--------------小屏幕css---------- -->

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>


<?php wp_head(); //插件资源文件?>
<?php flush(); //提高运行效率?>
</head>



<body>

<div data-role="page">
<div data-role="header">
<div id="logo">
<h1 class="grid_4"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
<h2 class="grid_12 caption clearfix"><?php bloginfo('description'); ?></h2>
</div>

<?php if (has_nav_menu('header-menu')) : ?>
<nav data-role="navbar">
<?php 
wp_nav_menu( 
	array( 
	 'theme_location' => 'header-menu',
	 'container' => 'div',
	 'container_class' => 'headerMenu',
	 'container_id' => '',  
	 //这个参数可以给导航菜单顶级标签加自定义属性data-role="navbar"，这里修改了源程序nav-menu-template.php的193行
	) 
); 
?>
</nav>
<?php endif ?>


</div><!-------------- /header---------- -->
