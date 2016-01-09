<?php
/**
 * The template for displaying Archive pages of a Custom Blog Taxonomy
 */
get_header(); ?>


<?php get_sidebar(); ?>
	
 
<div id="page-left">
 <?php 
 
// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
 
// load thumbnail for this taxonomy term
$taxAlternateTitle = get_field('tax_alternate_title', $taxonomy . '_' . $term_id);
 
?>
    
<h3>You are viewing the Filmmaking category,
<?php if( !empty($taxAlternateTitle) ) { ?>
<?php echo $taxAlternateTitle; ?>
<?php } else { ?>
<?php single_cat_title( $prefix = '', $display = true ); ?>
<?php } ?>
</h3>
<div class="content-entry">
<?php //Get the correct taxonomy ID by id
$term = get_term_by( 'id', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

<?php echo term_description( $term, $taxonomy ) ?>

</div><!-- content entry -->
<div id="container" class="blog-square-container">


<?php
        while ($wp_query->have_posts()) : $wp_query->the_post();

            get_template_part('includes/blog-post');

         endwhile; /*endif;*/  ?>
    
    <div class="untamed-pagi">
        <?php untamed_pagi(); ?>
    </div>

</div><!-- blog square container --> 
<?php endif; wp_reset_postdata(); ?>



</div><!-- page left -->
<?php get_footer(); ?>