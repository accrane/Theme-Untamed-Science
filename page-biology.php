<?php 
/**
* Template Name: Biology
*/
 get_header(); ?>
 <?php get_sidebar(); ?>



<div id="page-left">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 class="page-title">
<?php if(get_field('alternate_title')) { ?>
<?php the_field('alternate_title'); ?>
<?php } else { ?>
<?php the_title(); ?>
<?php } ?>
</h2>
<div class="content-entry">
 <?php the_content(); ?>
 </div><!-- content - entry -->
<?php endwhile; endif; ?>

<?php wp_reset_postdata(); ?>


</div><!-- / page left -->

<?php get_footer(); ?>