<?php
/**
 * Template for Author
 */

get_header(); 

?>

	


<div id="page-left">

<?php if ( have_posts() ) : ?>


<?php the_post(); ?>

<header class="page-header"><br>  
  <h1 class="page-title author">Author Archives:</h1>
  <br> 
</header>


<?php  rewind_posts(); ?>



   
  
 <div class="author-archive-bio"> 
  <h2>This is <?php the_author(); ?>'s page</h2>    
 <div class="author-avatar">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentythirteen_author_bio_avatar_size', 74 ) ); ?>
</div><!-- .author-avatar -->
  <p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
        </p>
        
     <strong>Below you can find all the Untamed Science articles that <?php the_author(); ?> has written.</strong>   
     
 </div><!-- author-archive-bio -->


<div id="container" class="blog-square-container">
  <?php while(have_posts()): the_post(); 

    get_template_part('includes/blog-post');

  endwhile; endif;?>

</div><!-- blog square container -->


  <div class="untamed-pagi">
      <?php pagi_posts_nav(); ?>
  </div>



</div><!-- page left -->

<?php 

get_sidebar();

get_footer(); 

?>