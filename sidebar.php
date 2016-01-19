

<div id="sidebar">
<?php 
// If we are showing a Bio Diversity Page, then let's show all the Classifications 
if ( 'biodiversity' == get_post_type() ) { 

	get_template_part('sidebar-biodiversity');

 } 


// Else if Biology Post type or page
elseif ( 'biology' == get_post_type() || is_page('world-biology') ) {

	get_template_part('sidebar-biology');

 } // Else if Biology



// Else if Filmmaking or film page
elseif ( 'filmmaking' == get_post_type() || is_page('how-to-filmmaking') ) {  // if viewing a Biology Taxonomy  

	get_template_part('sidebar-filmmaking');

 } ?>


<div class="sideitem orange">
	<h3>Untamed Science Updates</h3>
	<?php get_template_part( 'includes/newsletter' ); ?>
</div><!-- sideitem -->


<?php
	// $post = get_post(86);
	// setup_postdata( $post );

	// $googleScript = get_field('body_script');
	// $enable = get_field('enable_ad');
	
	// if( $enable == 'Yes' ) :
	// echo '<!-- right big -->';
	// echo '<div class="ad">';
	
	// 	if( $googleScript != '' ) {
	// 		echo $googleScript;
	// 	}
	
	// echo '</div><!-- ad -->';
	// endif; 

	// wp_reset_postdata(); 
?>


<!-- <div class="sidebox-video-list">
	<a href="<?php bloginfo('url'); ?>/science-videos-list/">View Science Vidoes</a>
</div>

<div class="sidebox-study-biology">
	<a href="<?php bloginfo('url'); ?>/world-biology/">Studying Biology?</a>
</div> -->
<?php if( have_rows('sideboxes', 'option') ): while( have_rows('sideboxes', 'option') ): the_row(); 

	$boxtitle = get_sub_field('title', 'option');
	$color = get_sub_field('color', 'option');
	$link = get_sub_field('link', 'option');
	$image = get_sub_field('image', 'option');
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];
 	$size = 'medium';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];

?>

<div class="sideitem <?php echo $color ?>">
	<a href="<?php echo $link; ?>">
		<h3><?php echo $boxtitle; ?></h3>
		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
	</a>
</div><!-- sideitem -->

<?php endwhile; endif; ?>

<div class="clear"></div>

<?php 
	
	/*
			Ad # 1
	_______________________________________*/

	$post = get_post(2501);
	setup_postdata( $post );
	$googleScript = get_field('body_script');
	$enable = get_field('enable_ad');
	
	if( $enable == 'Yes' ) :
	echo '<!-- AD #1 -->';
	echo '<div class="ad">';
	
		if( $googleScript != '' ) {
			echo $googleScript;
		}
	
	echo '</div><!-- ad -->';
	endif; // endif the ad is enabled
	wp_reset_postdata();

	/*
			Ad # 2
	_______________________________________*/
	
	$post = get_post(2502);
	setup_postdata( $post );
	$googleScript = get_field('body_script');
	$enable = get_field('enable_ad');
	
	if( $enable == 'Yes' ) :
	echo '<!-- AD #2 -->';
	echo '<div class="ad">';
	
		if( $googleScript != '' ) {
			echo $googleScript;
		}
	
	echo '</div><!-- ad -->';
	endif; // endif the ad is enabled
	wp_reset_postdata();

	/*
			Ad # 3
	_______________________________________*/
	
	$post = get_post(2503);
	setup_postdata( $post );
	$googleScript = get_field('body_script');
	$enable = get_field('enable_ad');
	
	if( $enable == 'Yes' ) :
	echo '<!-- AD #3 -->';
	echo '<div class="ad">';
	
		if( $googleScript != '' ) {
			echo $googleScript;
		}
	
	echo '</div><!-- ad -->';
	endif; // endif the ad is enabled
	wp_reset_postdata();
?>

<?php // If a Side Box is Defined....
 if(get_field('sideboxes')): ?>
 	<?php while(has_sub_field('sideboxes')): ?>
 
		<div class="sideitem <?php the_sub_field('color'); ?>">
		<h3><?php the_sub_field('title'); ?></h3>
        <?php the_sub_field('contents'); ?>
        </div><!-- side item -->
 
	<?php endwhile; ?>
<?php endif;// if a sidebox is defined ?>

</div><!-- sidebar -->

<?php wp_reset_postdata(); wp_reset_query(); ?>