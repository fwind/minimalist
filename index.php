<?php get_header(); ?>

<div id="page"><!------- page------->





<section id="container">

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div class="post"> <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <span><?php the_time('Y年n月j日') ?></span></div>

<?php endwhile; ?>

<?php endif; ?>
</section>






<?php get_sidebar(); ?>
<div><!------- page------->


<?php get_footer(); ?>