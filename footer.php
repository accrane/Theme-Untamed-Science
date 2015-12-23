


<?php wp_reset_postdata();  // close loop ?>
<?php wp_reset_query(); ?>

</div> <!-- main -->
         
         
         <div class="clear"></div>

<div id="footer-container"> 
    
    



<?php if ( !is_home() ) : ?>
        
       
        <div id="footer-slider-container">
        <h3>New From Untamed Science</h3>
        	<div id="front-page-rotation">
             <div id="flexslider">
                <div class="flexslider">
                <ul id="mycarousel" class="jcarousel-skin-tango">
            
            
           <?php
		   
		   /* Custom Query to pull all posts with the Front Page Category Custom Taxonomy
		      from 4 different Custom Post Types that are listed in the Array Below */
		   
           $args = array(
		   
            'post_type' => array('blog','biodiversity', 'filmmaking', 'biology'), //You list of Custom Post Types
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
           
                      <div class="homepage-thumb <?php echo $post_type."-home" // post type turned into a class ?>">
                      <a href="<?php the_permalink(); ?>" >
                        <?php if ( has_post_thumbnail() ) {  ?>
                               <?php the_post_thumbnail( 'homepage_thumb' ); ?>
                        <?php } else { ?><img src="<?php bloginfo('template_url'); ?>/images/default-homepage-thumb.png" /><?php } ?>
                             <div class="homepage-thumb-title-slider">
                             <?php if(get_field('alternate_title')) { ?>
<?php the_field('alternate_title'); ?>
<?php } else { ?>
<?php the_title(); ?>
<?php } ?>
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
            
            
            </div><!-- /footer slider container -->
            
            
         <?php endif; ?>
    
    
    
    
    
    
    <div id="footer">

    
    <div class="footer-left">
    <h3>Company Pages</h3>
    <ul>
    <?php wp_nav_menu( array( 'theme_location' => 'footermenu' ) ); ?>
    <!--<li><a href="<?php bloginfo('url'); ?>/about">About the site</a></li>
    <li><a href="<?php bloginfo('url'); ?>/crew">Crew information</a></li>
    <li><a href="<?php bloginfo('url'); ?>/media">Media and Awards</a></li>
    <li><a href="<?php bloginfo('url'); ?>/privacy">Privacy Policy</a></li>
    <li><a href="<?php bloginfo('url'); ?>/sitemap">Sitemap</a></li>
    <li><a href="<?php bloginfo('url'); ?>/wp-login.php">Login</a></li>-->
    </ul>
    <p class="copyright">Copyright &copy; <?php echo date('Y'); ?></p>
    <p class="copyright">All rights reserved.</p>
    </div><!-- #footer -->
    
    
    <div class="footer-mid-left">
    <h3>Can't find what you were looking for?</h3>
<form action="http://www.google.com" id="cse-search-box" target="_blank">
  <div class="footer-form">
    <input type="hidden" name="cx" value="partner-pub-6981626318170748:9252974045" />
    <input type="hidden" name="ie" value="UTF-8" />
    <div class="forminput">
    <input type="text" name="q" name="s" id="search"  class="formtip"  />
     </div>
            <!--<input type="text"  value="site search..." onfocus="if(this.value == 'site search...'){this.value = '';}" />-->
           
     <div class="formbutton"> <input type="submit" class="head-search" value="Search"  /></div>
  </div>
</form>

<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>
    </div><!-- #footer -->
    
    <div class="footer-mid-right">
<!-- Begin MailChimp Signup Form -->
<h3>Join our mailing list</h3>
<?php get_template_part( '/includes/newsletter' ); ?>
    </div><!-- #footer -->
    
    <div class="footer-right">
     <h3>Follow Us on...</h3>
         <div id="f-soc">
        	<ul>
                <!--<li class="f-rss"><a href="<?php bloginfo('url'); ?>/feed/">RSS</a></li>-->
                <li class="f-facebook"><a href="https://www.facebook.com/pages/Untamed-Science/169220075768">Like Us on Facebook</a></li>
                <li class="f-twitter"><a href="https://twitter.com/UntamedScience">Follow Us on Twitter</a></li>
                <li class="f-youtube"><a href="http://www.youtube.com/user/UntamedScience">Watch us on YouTube</a></li>
            </ul>
        </div>
        
    <div class="clear"></div>
    <h3>Our other sites:</h3>
        <ul>
            
            <!--<li><a href="http://untamedscience.com/year-of-chemistry/">Untamed Chemistry</a></li>-->
            <li><a href="http://untamedscience.com/how-to-filmmaking">Science Filmaking</a></li>
            <li><a href="http://thewildclassroom.com">The Wild Classroom</a></li>
            <li><a href="http://explorebiodiversity.com">Explore Biodiversity</a></li>
            <li><a href="http://blackbearinfo.com">Black Bear Info</a></li>
        </ul>
    </div><!-- #footer -->
    

    
    </div><!-- #footer -->
     </div><!-- #footer container -->

	

<?php wp_footer(); ?>
  <!-- Slider on load -->
<script type="text/javascript" charset="utf-8">
    // Can also be used with $(document).ready()

   $(window).load(function() {
 /* $('.flexslider').flexslider({
    animation: "slidereffect",
        animationLoop: true,
        easing: "linear",
        useCSS: false,
        randomize: false,
        pauseOnHover: true,
        slideshowSpeed: 12,
        animationSpeed: 8000,
        controlNav: false,
        directionNav: true,
        itemWidth: 220,
        itemMargin: 5,
		
  });
  */
  
  // set up and load the front page carousel
  jQuery('#mycarousel').jcarousel({
    	wrap: 'circular',
		auto: 0,
		scroll: 1,
		animation: 400,
    });
	
	// WE added a css of display: none to the list itme so it doesn't flicker or look weird when it's loading
	// But we need to remove that class on load to see the carousel 
 jQuery('ul#mycarousel li').removeClass('hideitemonload');


  
});
  </script>
  <!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- Google Analytics -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4084017-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>