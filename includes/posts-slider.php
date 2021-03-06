<!-- new from options -->
	<div id="front-page-rotation">
   		<div id="flexslider" class="flexslider">
      			<ul id="mycarousel" class="jcarousel-skin-tango">

              <?php $posts = get_field('posts_to_show_on_slider', 'option');

                if( $posts ): ?>

              <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
           
           <li class="hideitemonload">
           		<?php $post_type = get_post_type( get_the_ID() ); // Get the post type so you can style your div according to the post type ?>
           
                    <div class="homepage-thumb <?php echo $post_type."-home"; ?>">
                      <a href="<?php the_permalink(); ?>" >
                        
                        <?php 
                        	if ( has_post_thumbnail() ) {  
                               	the_post_thumbnail( 'homepage_thumb' ); 
                        	} else { ?>
                        		<img src="<?php bloginfo('template_url'); ?>/images/default-homepage-thumb.png" />
                        <?php } ?>
                             
                             <div class="homepage-thumb-title-slider">
                             	<?php 
                             		if(get_field('alternate_title')) { 
										the_field('alternate_title'); 
									} else { 
										the_title(); 
									} ?>
                             </div><!-- homepage-thumb title slider -->

                         </a>
                    </div><!-- homepage thumb --> 
              
            </li>
            <?php  endforeach;  ?>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
             <!-- Rewind and Reset -->
				<?php  //wp_reset_query(); // Reset Query  ?> 
                <?php  //rewind_posts(); ?>
            </div><!-- #frobt page rotation -->
            </ul><!-- /slides -->
			</div><!-- /flexslider -->
            </div><!-- /flexslider -->