<?php if(is_page('how-to-filmmaking')) { ?>


<div class="sideitem grey">
<div class="taxonomy-item">
	<h2>
		<?php 
				if(get_field('alternate_title')) {  
					the_field('alternate_title');  
				} else {  
					the_title();  
				} 
			?>
	</h2>
<?php 
	$filmmakingPages = array(
		'depth'        => 1,
		'title_li'     => '',
		'post_type'    => 'filmmaking',
	    'post_status'  => 'publish' 
	); 
	wp_list_pages($filmmakingPages); 
?>



</div><!-- taxonomy item -->
</div><!-- sideitem -->

<?php } else { ?>

<div class="sideitem grey">
<div class="taxonomy-item">

<?php if(count(get_post_ancestors($post->ID)) == 1 ) { ?>

	<h2><?php echo get_page(array_pop(get_post_ancestors($post->ID)))->post_title; ?></h2>
<?php 
	$filmmakingPages = array(
		'depth'        => 1,
		'child_of'     => $post->post_parent,
		'exclude'      => '',
		'include'      => '',
		'title_li'     => '',
		'echo'         => 1,
		'authors'      => '',
		'sort_column'  => 'menu_order, post_title',
		'walker'       => '',
		'post_type'    => 'filmmaking',
	    'post_status'  => 'publish' 
	); 
	wp_list_pages($filmmakingPages); 
?>

<?php } else { // if post count == 1 ?>

	<h2><?php echo get_page(array_pop(get_post_ancestors($post->ID)))->post_title; ?></h2>
<?php 
	$filmmakingPages = array(
		'depth'        => 1,
		'child_of'     => $post->ID,
		'exclude'      => '',
		'include'      => '',
		'title_li'     => '',
		'echo'         => 1,
		'authors'      => '',
		'sort_column'  => 'menu_order, post_title',
		'walker'       => '',
		'post_type'    => 'filmmaking',
	    'post_status'  => 'publish' 
	); 
	wp_list_pages($filmmakingPages); ?>

<?php } // End Filmmaking ?>

</div><!-- taxonomy item -->
</div><!-- sideitem -->

<?php } /// else ?>