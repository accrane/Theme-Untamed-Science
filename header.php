<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<meta name="google-site-verification" content="NPP7YiGqCJpvUheQKQWvRnh0uU_mBF7saSZIWqGuAhM" />
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=219473481428768";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="header">   
  <div id="main-nav-container">  
   <div class="wrapper">

      <?php if(is_home()) { ?>
            <h1 class="logo">
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </h1>
        <?php } else { ?>
            <div class="logo">
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </div>
        <?php } ?>

        <div id="header-social">
              <ul>
              	<li class="facebook"><a href="https://www.facebook.com/pages/Untamed-Science/169220075768">Facebook</a></li>
                <li class="twitter"><a href="https://twitter.com/UntamedScience">Twitter</a></li>
                <li class="youtube"><a href="http://www.youtube.com/user/UntamedScience">Youtube</a></li>
              </ul>
          </div><!-- header-social -->


        <div class="search-glass">
          <ul>
            <li>
               <a href="#">Search</a>
                <ul>
                   <li class="search-drop">
                      <?php get_template_part('includes/google-search'); ?>
                      <?php //get_template_part('includes/wordpress-search'); ?>
                 </li>
               </ul>
             </li>
           </ul>
        </div><!-- search open -->

        <div class="mobile-search">
          <?php get_template_part('includes/google-search'); ?>
        </div><!-- mobile search -->

      

      <nav id="site-navigation" class="main-navigation" role="navigation">
          <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
          <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
      </nav><!-- #site-navigation -->
    
</div><!-- wrapper -->
  

</div><!-- #navigation  container  -->
    

<div id="tree-nav-container">
  <?php 

  if(is_front_page()) { 
      
      get_template_part('includes/posts-slider');
  
  } elseif ( 'biodiversity' == get_post_type() || is_page('tree-of-life')  || is_taxonomy('classification') )   {?>
              
       <div id="tree-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'tree-of-life', 'menu_class' => 'tree-menu' ) ); ?>
       </div><!-- #navigation -->

  <?php } elseif ( 'biology' == get_post_type() || is_page('world-biology') || is_taxonomy('biology-class') ) { ?>
        
        <div id="tree-nav">
           <?php wp_nav_menu( array( 'theme_location' => 'biology', 'menu_class' => 'tree-menu' ) ); ?>
         </div><!-- #navigation -->        
  			
  <?php  }  ?>
</div><!-- #tree navigation  container -->
    
</div><!-- #header -->

<?php 
    if(!is_front_page()) { 
      if ( function_exists('yoast_breadcrumb') ) { ?>
      <div class="bread">
          <div class="wrapper">
            <?php $breadcrumbs = yoast_breadcrumb( '<li>', '</li>', false );
            echo str_replace( '|', ' </li><li>', $breadcrumbs ); ?>
          </div><!-- wrapper -->
     </div><!-- bread -->
     <?php } 
    } 
  ?>

<div id="main" class="wrapper">

  

  
    