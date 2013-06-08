<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
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


<link rel="stylesheet" href="http://192.168.1.11/wp/wp-content/themes/minimalist/menu.css" type="text/css" media="screen" />
<link rel="stylesheet" media="screen and (max-width: 550px)" href="http://192.168.1.11/wp/wp-content/themes/minimalist/jquery.mobile-1.3.1.css" />



<link rel="stylesheet" media="screen and (min-width: 550px)" href="http://192.168.1.11/wp/wp-content/themes/minimalist/jquery.mobile.css" />

<link rel="stylesheet" media="screen and (min-width: 550px)" href="http://192.168.1.11/wp/wp-content/themes/minimalist/jquery.desktop.css" />


<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>



</head>
<body>

