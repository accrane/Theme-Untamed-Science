<?php
/**
 * Displays a  Default Sinlge Post
 */

get_header(); ?>


<div id="page-left">
<?php // Let's start the loop ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="single-post-container">
	   
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
	        
	<?php 

	get_template_part( 'includes/share-page' ); 

	get_template_part( 'includes/author-bio' );  

	comments_template(); 

	?>

	</div><!-- single post container -->


<?php endwhile; endif; ?>
</div><!-- page left -->

<?php 

get_sidebar();

get_footer(); 

?>