<?php 

/**
* Template Name: Sitemap
*/

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div id="page-left">
   <h2 class="page-title">
<?php if(get_field('alternate_title')) { ?>
<?php the_field('alternate_title'); ?>
<?php } else { ?>
<?php the_title(); ?>
<?php } ?>

</h2>
     <div class="content-entry">
 <?php the_content(); 

wp_nav_menu( array( 'theme_location' => 'sitemap' ) );
 ?>

 </div><!-- content - entry -->
 </div><!-- / page content -->


<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>