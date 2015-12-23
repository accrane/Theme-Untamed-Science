<?php
/**
 * The template for displaying Archive pages of a Custom Taxonomy
 */
get_header(); ?>


<?php get_sidebar(); ?>
	
        
 <?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>       

       
<div id="page-left">


  
    tax bio
<h2 class="page-title"><?php single_cat_title( $prefix = '', $display = true ); ?></h2>
	<?php //Get the correct taxonomy ID by slug
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

//Get Taxonomy Meta
$saved_data = get_tax_meta($term->term_id,'ba_text_field_id'); ?>
<?php if (!empty($saved_data)) {  ?>
<b>Common Name:</b> <?php echo $saved_data; ?>
	<h2 class="page-title">Description:</h2>
<?php echo category_description( $category_id ); ?>
<?php } ?>
<div class="clear"></div>

<?php //echo get_term_meta($tag->term_id, 'meta_title', true); ?>		


 <?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php

?>

<?php

/*//first get the current term
$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

//then set the args for wp_list_categories
 $args = array(
    'child_of' => $current_term->term_id,
    'taxonomy' => $current_term->taxonomy,
	'hide_empty' => 0,
	'hierarchical' => false,
	'depth'  => 1,
	'title_li' => ''
    );
 wp_list_categories( $args );
 //echo $current_term->name*/
?>



<?php $current_query = $wp_query->query_vars;
query_posts( array( $current_query['taxonomy'] => $current_query['term'], 'showposts' => 10 ) ); ?>
<h2 class="page-title">Species listed under <?php single_cat_title( $prefix = '', $display = true ); ?></h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="show-bio-of-tax">
<a href="<?php the_permalink(); ?>" >
<h2><?php the_field('common_name'); ?></h2>
(<?php the_title(); ?>)
</a>
</div>

<?php endwhile; endif; wp_reset_postdata(); ?>


<?php
 /* if(is_tax('genustag')) {
   get_template_part( 'genus' );
  } elseif(is_tax('familytag')) { 
  get_template_part( 'family' );
  } elseif(is_tax('ordertag')) { 
  get_template_part( 'order' );
  } elseif(is_tax('classtag')) { 
  get_template_part( 'class' );
  } elseif(is_tax('phylumtag')) { 
  get_template_part( 'phylum' );
  } elseif(is_tax('kingdomtag')) { 
   get_template_part( 'includes/kingdom' );
  } else {
	  echo "What is going on? I got no classification."; }*/?>



		<?php //endwhile; endif; ?>
        
        
      
        

		</div><!-- #page-left -->



<?php get_footer(); ?>