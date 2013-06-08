<?php get_header(); ?>
<div data-role="content">

<div id="main-layout">
   <div class="main-layout-row">
      <section id="container">
      
      
   <?php if(have_posts()) : ?>
      <ul data-role="listview" data-inset="true"> 
	      <?php while(have_posts()) : the_post(); ?>
        
               <li><a href = "<?php the_permalink(); ?>"><?php the_title(); ?><span class="ui-li-count"><?php the_time('Y年n月j日') ?></span></a><li>

        <?php endwhile; ?>
   </ul>
  <?php endif; ?>
      
      
      
      
      <?php pagination($query_string); //分页?>
      
      </section><!-------------------------------- /container -------------------------------->
      
	  <?php get_sidebar(); ?>
    </div><!-- /main-layout-row-->
</div><!-- /main-layout-->



</div><!-------- /content -------->
<?php get_footer(); ?>

