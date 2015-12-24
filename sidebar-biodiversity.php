<div class="sideitem grey">

<?php 

//Get the correct taxonomy ID by slug
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

//Get Taxonomy Meta
$saved_data = get_tax_meta($term->term_id,'ba_text_field_id'); ?>

<div class="commonname">
	<b>Common Name:</b> 
	<?php 
		if (!empty($saved_data)) { 
			echo $saved_data; 
		} else { 
			the_title(); 
		}  
	?>
</div><!-- common name -->

<div class="taxonomy-item">
<div class="all-classifications">

<div class="thelionking">
	<h2>Classification</h2>

	<div class="class-row">
		<div class="left-classif">Kingdom: </div> 
		<div class="right-classif" id="kingdom"><?php echo get_the_term_list( $post->ID, 'kingdomtag' ); ?></div>
	</div><!-- classs row -->

	<div class="class-row">
		<div class="left-classif">Phylum: </div>
		<div class="right-classif" id="phylum">
			<?php echo get_the_term_list( $post->ID, 'phylumtag' ); ?>
		</div>
	</div><!-- classs row -->

	<div class="class-row">
		<div class="left-classif" >Class: </div>
		<div class="right-classif" id="class" >
			<?php echo get_the_term_list( $post->ID, 'classtag' ); ?>
		</div>
	</div><!-- classs row -->

	<div class="class-row">
		<div class="left-classif">Order: </div>
		<div class="right-classif" id="order">
			<?php echo get_the_term_list( $post->ID, 'ordertag' ); ?>
		</div>
	</div><!-- classs row -->

	<div class="class-row">
		<div class="left-classif">Family: </div>
		<div class="right-classif" id="family">
			<?php echo get_the_term_list( $post->ID, 'familytag' ); ?>
		</div>
	</div><!-- classs row -->

	<div class="class-row">
		<div class="left-classif">Genus: </div>
		<div class="right-classif italicize" id="genus">
			<?php echo get_the_term_list( $post->ID, 'genustag' ); ?>
	</div>
	</div><!-- classs row -->

	<div class="class-row">
		<div class="left-classif">Species: </div>
		<div class="right-classif italicize" id="species">
			<?php $nonlinkTerm = get_the_term_list( $post->ID, 'speciestag' ); $termies = strip_tags( $nonlinkTerm ); echo $termies; ?>
		</div>
	</div><!-- classs row -->

</div><!-- the lion king -->


<?php if( is_single() ) : ?>
	<?php if( get_field( "species_range" ) ) { ?>
		<div class="thelionking">
			<h2>Species Range</h2>
			<img src="<?php the_field('species_range'); ?>"  />
		</div><!-- the lion king -->
	<?php } ?>
<?php endif; ?>

</div><!-- all calssifications -->
</div><!-- taxonomy item -->
</div><!-- sideitem -->