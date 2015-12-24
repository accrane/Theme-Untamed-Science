<?php
/**
 * Template Name: Filmmaking
 */

 get_header(); ?>
 
<div id="page-left">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<h1 class="page-title">
		<?php 
		
		if(get_field('alternate_title')) {  
			the_field('alternate_title');  
		} else {  
			the_title();  
		} 

		?>
	</h1>

	<div class="content-entry">
		<?php the_content(); ?>
	</div><!-- content - entry -->

<?php endwhile; endif; ?>


</div><!-- / page left -->
<?php 

get_sidebar(); 

get_footer(); 

 ?>