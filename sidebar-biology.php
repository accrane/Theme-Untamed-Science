<?php 

if( is_page('world-biology') ) { ?>

	<div class="sideitem grey">
		<div class="taxonomy-item">

			<h2>The Biology Portal</h2>

		<?php $biology_pages = array(
					'depth'        => 1,
					'title_li'     => '',
					'post_type'    => 'biology',
				    'post_status'  => 'publish' 
				); 

		 wp_list_pages($biology_pages); 

		 ?>
		

	</div><!-- taxonomy item -->
	</div><!-- sideitem -->

<?php } else { ?>

<div class="sideitem grey">
<div class="taxonomy-item">
<?php if(count(get_post_ancestors($post->ID)) == 1 ) { ?>

	<h2><?php echo get_page(array_pop(get_post_ancestors($post->ID)))->post_title; ?></h2>

<?php 
	$biology_pages = array(
		'depth'        => 1,
		'child_of'     => $post->post_parent,
		'exclude'      => '',
		'include'      => '',
		'title_li'     => '',
		'echo'         => 1,
		'authors'      => '',
		'sort_column'  => 'menu_order, post_title',
		'walker'       => '',
		'post_type'    => 'biology',
	    'post_status'  => 'publish' 
	); 
	 wp_list_pages($biology_pages); 
 ?>

<?php } else { // if count is == 1 ?>

	<h2><?php echo get_page(array_pop(get_post_ancestors($post->ID)))->post_title; ?></h2>
	
	<?php 
		$biology_pages = array(
			'depth'        => 1,
			'child_of'     => $post->ID,
			'exclude'      => '',
			'include'      => '',
			'title_li'     => '',
			'echo'         => 1,
			'authors'      => '',
			'sort_column'  => 'menu_order, post_title',
			'walker'       => '',
			'post_type'    => 'biology',
		    'post_status'  => 'publish' 
		); 
		 wp_list_pages($biology_pages); 
	 ?>


<?php } /// end if 3 levels deep. ?>
</div><!-- taxonomy item -->
</div><!-- sideitem -->

<?php  } ?>