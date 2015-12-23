<?php
/**
 * Displays a  Default Sinlge Post
 */

get_header(); ?>

<?php get_sidebar(); ?>



<div id="page-left">
<?php // Let's start the loop ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single-post-container">
   <h1 class="page-title"><?php if(get_field('alternate_title')) { ?>
<?php the_field('alternate_title'); ?>
<?php } else { ?>
<?php the_title(); ?>
<?php } ?></h1>
 		<div class="content-entry">
 <?php the_content(); ?>
 </div><!-- content - entry -->
        

 
<?php get_template_part( 'includes/share-page' ); ?>
<?php get_template_part( 'includes/author-bio' ); ?>
<?php comments_template(); ?>



        
        
</div><!-- single post container -->






<?php endwhile; endif; ?>
</div><!-- page left -->

<?php get_footer(); ?>