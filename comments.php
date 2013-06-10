
<!-- You can start editing here. -->
<div class="comments">
	<?php if ( ! comments_open() & is_single() )  : ?><p>评论被关闭</p><?php endif; ?>

	
	
	<?php if ($comments) : ?>
		<h3><?php the_title(); ?></h3>
        
		<ol class="commentlist">
		<?php wp_list_comments(); ?>
		</ol><!--------------评论列表------------------>
        
	 <?php else : // this is displayed if there are no comments so far ?>
	     <?php if ( comments_open() ) : ?>
			<!-- If comments are open, but there are no comments. -->
		   <?php else : // comments are closed ?>
			
		<?php endif; ?>
	<?php endif; ?>
    
    
    <p><?php paginate_comments_links(); ?></p>
	<div > 
	<?php if ( comments_open() ) : ?>
		<?php comment_form(); 
		?>
	<?php endif; // if you delete this the sky will fall on your head ?>
    </div><!--------------评论的框框------------------>
</div>