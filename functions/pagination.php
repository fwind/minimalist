<?php
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