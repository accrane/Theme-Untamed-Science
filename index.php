<?php get_header(); ?>




<div id="page-left">
<?php 
// You can query blog posts from a certain category or all of them
//query_posts( 'posts_per_page=2' ); 
?>





<!-- Rewind and Reset -->
<?php  wp_reset_query(); // Reset Query  ?> 
<?php rewind_posts(); ?>

<?php query_posts( array(
     'post_type' => 'page',
     'name' => 'home-page' )
     ); ?>
		<?php while ( have_posts() ) : the_post(); ?>

	
	
<h2 class="page-title">
<?php if(get_field('alternate_title')) { ?>
<?php the_field('alternate_title'); ?>
<?php } else { ?>
<?php the_title(); ?>
<?php } ?>
</h2>

 <div class="content-entry">
 <?php the_content(); ?>
 </div><!-- content - entry -->


		<?php endwhile; ?>

</div><!-- page left -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>