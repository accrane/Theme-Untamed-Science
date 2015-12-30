


<?php wp_reset_postdata();  // close loop ?>
<?php wp_reset_query(); ?>

</div> <!-- main -->
         
         
         <div class="clear"></div>

<div id="footer-container"> 
    
    



<?php if ( !is_home() ) : ?>
  <div id="footer-slider-container">
    <h3>New From Untamed Science</h3>
    <?php get_template_part('includes/posts-slider'); ?>
  </div><!-- /footer slider container -->
<?php endif; ?>
    
    
    
    
    
    
    <div id="footer">

    
    <div class="footer-left">
      <h3>Company Pages</h3>
      <ul>
        <?php wp_nav_menu( array( 'theme_location' => 'footermenu' ) ); ?>
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
            <?php wp_nav_menu( array( 'theme_location' => 'othersites' ) ); ?>
        </ul>
    </div><!-- #footer -->
    

    
    </div><!-- #footer -->
     </div><!-- #footer container -->

	

<?php wp_footer(); ?>
  <!-- Slider on load -->
<script type="text/javascript" charset="utf-8">
    // Can also be used with $(document).ready()

   $(window).load(function() {
  
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