<?php

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
add_image_size( 'onqor-xl', 2000 );
add_image_size( 'onqor-hd', 1920 );
add_image_size( 'onqor-large', 1000 );
add_image_size( 'onqor-logo', 600 );
add_image_size( 'onqor-small', 100 );
add_image_size( 'onqor-xs', 80 );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 100 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 150 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'bones-thumb-600' => __('600px by 150px'),
        'bones-thumb-300' => __('300px by 100px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* THEME CUSTOMIZE *********************/

/* 
  A good tutorial for creating your own Sections, Controls and Settings:
  http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722
  
  Good articles on modifying the default options:
  http://natko.com/changing-default-wordpress-theme-customization-api-sections/
  http://code.tutsplus.com/tutorials/digging-into-the-theme-customizer-components--wp-27162
  
  To do:
  - Create a js for the postmessage transport method
  - Create some sanitize functions to sanitize inputs
  - Create some boilerplate Sections, Controls and Settings
*/


/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
    <article  class="cf">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call ?>
        <?php
          // create variable
          $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call ?>
        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'bonestheme' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>

      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php comment_text() ?>
      </section>
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </article>
  <?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!


// Load the theme stylesheets
function theme_styles()  
{ 

  // Load all of the styles that need to appear on all pages
  wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/styles/all.min.min.css' );
  
  wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/scripts/all.min.min.js', NULL, NULL, true );



}

// Google Fonts

add_action('wp_enqueue_scripts', 'theme_styles');

// function wpb_add_google_fonts() {
 
//   wp_enqueue_style( 'wpb-google-fonts', "https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300;400;500&display=swap");
//   wp_enqueue_style( 'wpb-google-fonts', "https://fonts.googleapis.com/css2?family=Montserrat&display=swap");
//   wp_enqueue_style( 'wpb-google-fonts', "https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500&display=swap");
// }
   
// add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// Google Map

function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyBuTSbA4n5MXVZLbz6BhPghUuDvmJ28EiE');
}
add_action('acf/init', 'my_acf_init');

// Menu

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page();
  
}

// Pagination Blogs

function custom_rewrite_rules($rules) {
  $new_rules = array(
      'blogs/author/([^/]+)/page/([0-9]+)/?$' => 'index.php?author_name=$matches[1]&paged=$matches[2]',
      'blogs/([^/]+)/([^/]+)/page/([0-9]+)/?$' => 'index.php?category_name=$matches[1]&name=$matches[2]&paged=$matches[3]',
      'blogs/([^/]+)/page/([0-9]+)/?$' => 'index.php?category_name=$matches[1]&paged=$matches[2]',
      'blogs/([^/]+)/([^/]+)/page/([0-9]+)/?$' => 'index.php?category_name=$matches[1]&author_name=$matches[2]&paged=$matches[3]',
  );

  return $new_rules + $rules;
}

add_filter('rewrite_rules_array', 'custom_rewrite_rules');

// Post Thumbnails 

add_theme_support( 'post-thumbnails' );

/* DON'T DELETE THIS CLOSING TAG */ ?>
