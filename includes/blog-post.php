<?php 
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;

if( 'blog' == get_post_type() ) {
	$tax = 'blogcats';
} elseif( 'biodiversity' == get_post_type() ) {
	$tax = 'biocats';
} elseif( 'filmmaking' == get_post_type() ) {
	$tax = 'filmmakingcats';
} elseif( 'biology' == get_post_type() ) {
	$tax = 'biocats';
} else {
	// got nuthin...
	$tax = 'none';
}


?>


<div class="blog-square item">

	<div class="blog-square-readmore">
		<a href="<?php the_permalink(); ?>">Read More</a>
	</div>


	<div class="blog-square-category">
		<?php 
			$custom_tax = get_the_term_list( $post->ID, $tax, '<li>', '', '</li>');
			echo $custom_tax;
		?>
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
		<h2>
			<a href="<?php the_permalink(); ?>">
			<?php 
				if(get_field('alternate_title')) {  
					the_field('alternate_title');  
				} else {  
					the_title();  
				} 
			?>
			</a>
		</h2>
	</div><!-- blog-square-below -->
  
  
</div><!-- blog square  -->