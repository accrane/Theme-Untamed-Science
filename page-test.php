<?php
/**
 * Template Name: pagination test
 */

get_header(); ?>
<?php //get_sidebar(); ?>
<div id="page-left">
<?php
$current_cat = get_query_var('cat');
/*$temp = $wp_query;
$wp_query = null;*/
$wp_query = new WP_Query();
$wp_query->query(array(
	'post_type'=>'filmmaking',
	'paged' => $paged,
	'posts_per_page' => 2,
));

while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


<?php //if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php  endwhile; wp_reset_postdata(); ?>
<?php //endif; wp_reset_postdata(); ?>

<div class="untamed-pagi">
<?php untamed_pagi(); ?>
</div>


</div><!-- page left -->
<?php get_footer(); ?>