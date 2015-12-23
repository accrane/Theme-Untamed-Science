<?php
/**
 * The template for displaying Archive pages of a Custom Taxonomy
 */
get_header(); ?>


<?php get_sidebar(); ?>
	
        
 <?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>       

       
<div id="page-left">


  
    tax film
<h2 class="page-title"><?php single_cat_title( $prefix = '', $display = true ); ?></h2>
	

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="blog-square">

<div class="blog-square-readmore"><a href="<?php the_permalink(); ?>">Read More</a></div>
<!--<div class="filed-away">Filed as:</div>-->
<div class="blog-square-category">
<?php $custom_tax = get_the_term_list( $post->ID, 'filmmakingcats', '<li>', '', '</li>') ?>  
<?php echo $custom_tax ?>
</div><!-- blog square category -->

        <div class="blog-featured-image">
        <a href="<?php the_permalink(); ?>">
				<?php
                //  Display the featured image. Must be inside a loop.
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('full');
                }
                // If you do not have a Featured Image, show a thumbnail stored in the themes images folder.
                else {
                    echo '<img src="' . get_bloginfo( 'template_url' ) . '/images/default-featured.png" width="515px; height="412px" />';
                     }
                ?>
                </a>
        </div><!-- blog featured image  -->
<div class="clear"></div>
<div class="blog-square-below">

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php  //echo get_excerpt(300); ?> 
</div><!-- blog-square-below -->
  
  
</div><!-- blog square  -->


		<?php endwhile; endif; ?>
        
        
      
        

		</div><!-- #page-left -->



<?php get_footer(); ?>