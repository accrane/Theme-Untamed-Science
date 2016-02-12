<?php
// This theme uses wp_nav_menu() in one location.
// Set the menus for the Theme.
  register_nav_menu( 'primary', __( 'Primary Menu', 'us' ) );
  register_nav_menu( 'tree-of-life', __( 'Biodiversity Menu', 'us' ) );
  register_nav_menu( 'biology', __( 'Biology Menu', 'us' ) );
  register_nav_menu( 'footermenu', __( 'Footer Menu', 'us' ) );
  register_nav_menu( 'othersites', __( 'Other Sites', 'us' ) );
  
  add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
	
// This theme uses a custom image size for featured images, displayed on "standard" posts.
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop

add_image_size( 'homepage_thumb', 220, 180, true ); // 220 pixels wide by 180 pixels tall, hard crop mode
add_image_size( 'mobile_thumb', 50, 50, true ); // 220 pixels wide by 180 pixels tall, hard crop mode

/*-------------------------------------
	Custom client login, link and title.
---------------------------------------*/
function my_login_logo() { ?>
<style type="text/css">
  body.login div#login h1 a {
  	background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
  	background-size: 327px 67px;
  	width: 327px;
  	height: 67px;
  }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Change Link
function loginpage_custom_link() {
	return the_permalink();
}
add_filter('login_headerurl','loginpage_custom_link');

/*-------------------------------------
	Favicon.
---------------------------------------*/
function mytheme_favicon() { 
 echo '<link rel="shortcut icon" href="' . get_bloginfo('stylesheet_directory') . '/images/favicon.ico" >'; 
} 
add_action('wp_head', 'mytheme_favicon');
// ACF Options page
if( function_exists('acf_add_options_page') ) {acf_add_options_page();}

/*
Plugin Name: Page Excerpt

Description: Adds support for page excerpts - uses WordPress code

*/
add_action( 'edit_page_form', 'pe_add_box');
add_action('init', 'pe_init');
function pe_init() {
  if(function_exists("add_post_type_support")) //support 3.1 and greater
  {add_post_type_support( 'page', 'excerpt' );}
}
function pe_page_excerpt_meta_box($post) {
?>
<label class="hidden" for="excerpt"><?php _e('Excerpt hey') ?></label><textarea rows="1" cols="40" name="excerpt" tabindex="6" id="excerpt"><?php echo $post->post_excerpt ?></textarea>
<p><?php _e('Excerpt go here..........'); ?></p>
<?php
}
function pe_add_box()
{
  if(!function_exists("add_post_type_support")) //legacy
  {   add_meta_box('postexcerpt', __('Page Excerpt'), 'pe_page_excerpt_meta_box', 'page', 'advanced', 'core');}
}


// Limit the excerpt without truncating the last word.
// use like this > echo get_excerpt(100);
function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = $excerpt.'... <a href="'.$permalink.'">continue reading</a>';
  return $excerpt;
}

// Remove some stuff from the menu
add_action('admin_menu', 'remove_niggly_bits');
function remove_niggly_bits() {
   remove_submenu_page( 'edit.php?post_type=biology', 'edit-tags.php?taxonomy=front_page&amp;post_type=biology' );
   remove_submenu_page( 'edit.php?post_type=filmmaking', 'edit-tags.php?taxonomy=front_page&amp;post_type=filmmaking' );
   remove_submenu_page( 'edit.php?post_type=biodiversity', 'edit-tags.php?taxonomy=front_page&amp;post_type=biodiversity' );
   remove_submenu_page( 'edit.php?post_type=blog', 'edit-tags.php?taxonomy=front_page&amp;post_type=blog' ); 
}

// Get rid of the No Category Messages in the wp_list_categories function
function bm_dont_display_it($content) {
  if (!empty($content)) {
    $content = str_ireplace('<li>' .__( "No categories" ). '</li>', "", $content);
  }
  return $content;
}
add_filter('wp_list_categories','bm_dont_display_it');


function custom_post_author_archive( &$query )
{
    if ( $query->is_author )
        $query->set( 'post_type', array( 'filmmaking', 'biology', 'blog' ));
    remove_action( 'pre_get_posts', 'custom_post_author_archive' ); // run once!
}
add_action( 'pre_get_posts', 'custom_post_author_archive' );


// // Remove Menus
// function remove_menus () {
// global $menu;
//   $restricted = array(
// /*  __('Dashboard'),*/ 
//   __('Tools'),
//   __('Posts'));
//   end ($menu);
//   while (prev($menu)){
//     $value = explode(' ',$menu[key($menu)][0]);
//     if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
//   }
// }
// add_action('admin_menu', 'remove_menus');
// Remove Menus



function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
  global $post;         // load details about this page
  if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
  else 
               return false;  // we're elsewhere
};