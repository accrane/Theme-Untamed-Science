<?php
/**
 * Template Name: Blog
 */

get_header();  ?>

<div id="page-left">

<?php
$current_cat = get_query_var('cat');
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query(array(
	'post_type'=>'blog',
	'paged' => $paged,
	'posts_per_page' => 10,
));
if ($wp_query->have_posts()) : ?>
    <div id="container" class="blog-square-container">
        
        <?php
        while ($wp_query->have_posts()) : $wp_query->the_post();

            get_template_part('includes/blog-post');

         endwhile; /*endif;*/  ?>

    </div><!-- blog square container --> 
    
    <div class="untamed-pagi">
        <?php pagi_posts_nav(); ?>
    </div>

<?php endif; /*endif;*/ wp_reset_postdata(); ?>

</div><!-- page left -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>