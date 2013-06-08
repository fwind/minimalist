<?php get_header(); ?>
<div data-role="content">

   <div id="main-layout">
      <div class="main-layout-row">
          <section id="container">
          
   <?php if(have_posts()) : ?>
	      <?php while(have_posts()) : the_post(); ?>
        
               <h2><?php the_title(); ?></h2>
               <p><?php the_content(); ?></p>
        <?php endwhile; ?>
   </ul>
  <?php endif; ?>

    
    
    
          </section><!-------------------------------- /container -------------------------------->
      
	      <?php get_sidebar(); ?>
       </div><!-- /main-layout-row-->
   </div><!-- /main-layout-->
</div><!-------- /content -------->
<?php get_footer(); ?>

