<?php
/**
 * The template for displaying Archive pages of a Custom Taxonomy
 */
get_header(); ?>

<div id="page-left">

<?php 
 
// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
 
// load thumbnail for this taxonomy term
$taxAlternateTitle = get_field('tax_alternate_title', $taxonomy . '_' . $term_id);
 
?>
    
  <h1 class="page-title">
    <?php 
    
      if( !empty($taxAlternateTitle) ) { 
        echo $taxAlternateTitle; 
      } else { 
        single_cat_title( $prefix = '', $display = true ); 
      } 
    ?>
  </h1>

  <div class="content-entry">
  	<?php //Get the correct taxonomy ID by slug
      $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

      //Get Taxonomy Meta
      $saved_data = get_tax_meta($term->term_id,'ba_text_field_id'); 
       if (!empty($saved_data)) {  
          echo category_description( $category_id ); 
        } 
    ?>
  <div class="clear"></div>

  <h2 class="page-title">Species listed under <?php single_cat_title( $prefix = '', $display = true ); ?></h2>

  <div class="entry-content">
  <?php //echo category_description($term_id); ?>
  </div>

  <?php
  $current_query = $wp_query->query_vars;

  $wp_query = new WP_Query();
  $wp_query->query(array(
  	$current_query['taxonomy'] => $current_query['term'],
  	'paged' => $paged,
  	'posts_per_page' => 10,
  ));

  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="list-species">
      <a href="<?php the_permalink(); ?>" >
      <?php  if ( has_post_thumbnail() ) { ?>
        <div class="list-species-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
      <?php } else { ?>
        <div class="list-species-thumbnail">
          <img src="<?php bloginfo('template_url'); ?>/images/species-thumb-default.png" width="70px" height="70px"/>
        </div>
      <?php } ?>
        <div class="list-species-name">
          <h3><?php the_title(); ?></h3>
          <span class="italicize">(<?php the_field('common_name'); ?>)</span>
        </div><!-- list species name -->
      </a>
    </div><!-- list species -->

  <?php endwhile; /*endif;*/ wp_reset_postdata(); ?>

  </div><!-- #content entry -->
        
</div><!-- #page-left -->


<?php 

get_sidebar();

get_footer(); 

?>