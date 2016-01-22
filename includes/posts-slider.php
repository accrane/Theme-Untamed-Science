
	<div id="front-page-rotation">
   		<div id="flexslider" class="flexslider">
      			<ul id="mycarousel" class="jcarousel-skin-tango">


 <?php
		   
		   /* Custom Query to pull all posts with the Front Page Category Custom Taxonomy
		      from 4 different Custom Post Types that are listed in the Array Below */
		   
           $args = array(
		   
            'post_type' => array('blog','biodiversity', 'filmmaking', 'biology', 'page'), //You list of Custom Post Types
            'posts_per_page' => '100', // # of posts to show
			'tax_query' => array(  //Custom Taxonomy "front_page"
				array(       // array within an array
					'taxonomy' => 'front_page', // Name when registering CT
					'field' => 'slug',
					'terms' => 'front-page' // slug created by WP when you make your entry
				)
			)
                
            );
            $query = new WP_Query( $args );  // Query all of your arguments from above
           ?>
           <?php if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>
           
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
            <?php  endwhile; endif; wp_reset_postdata();  // close loop ?>
             <!-- Rewind and Reset -->
				<?php  //wp_reset_query(); // Reset Query  ?> 
                <?php  //rewind_posts(); ?>
            </div><!-- #frobt page rotation -->
            </ul><!-- /slides -->
			</div><!-- /flexslider -->
            </div><!-- /flexslider -->