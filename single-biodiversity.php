<?php
/**
 * Displays a  Biodiversity Sinlge Post
 */

get_header(); ?>

<div id="page-left">
<?php // Let's start the loop ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="single-post-container">

		<h1 class="page-title">
			<?php 
			if(get_field('alternate_title')) { 
				the_field('alternate_title'); 
			} else { 
				the_title(); 
			} ?>
		</h1>

		<h3 class="page-title italicize"><?php the_field('common_name'); ?></h3>


		<div class="content-entry">
			<?php the_content(); ?>
		</div><!-- content - entry -->

		<h3>Related Topics</h3>

			<?php get_template_part( 'includes/share-page' ); ?>
			<?php get_template_part( 'includes/author-bio' ); ?>

		</div><!-- single post container -->

	<?php endwhile; endif; ?>
</div><!-- page left -->

<?php 
get_sidebar();
get_footer(); 
?>