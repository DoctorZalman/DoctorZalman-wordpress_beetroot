<?php
add_filter('show_admin_bar', '__return_false');

// register scripts and styles
add_action( 'wp_enqueue_scripts', 'my_scripts_and_styles');
//register menus
add_action( 'after_setup_theme', 'register_menus');
// //register widget zones
add_action( 'widgets_init', 'widgets_zones' );


add_action( 'widgets_init', 'blog_single_right' );

//fonts

add_action( 'wpb_add_google_fonts', 'regedit_meta', 5);

add_image_size( 'mytheme-mini', 770, 400, true );

add_image_size( 'mytheme-square', 600, 600, true );
 


function my_scripts_and_styles() {

    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery-migrate', get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('jquery-waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('jquery-stellar', get_template_directory_uri().'/js/jquery.stellar.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('aos', get_template_directory_uri().'/js/aos.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('animateNumber', get_template_directory_uri().'/js/jquery.animateNumber.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('scrollax', get_template_directory_uri().'/js/scrollax.min.js', array('jquery'), '1.0.1', true);
    // wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCDCApeoMpSTQxvz14Yhh09zlsw8FhB2ck', array(''), '1.0.1', true);
    // wp_enqueue_script('google-map-scritps', get_template_directory_uri() . '/js/google-map.js', array('google-map'), '1.0.1', true);
    // wp_enqueue_script('readitblog-googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(''), '1.0.1', true);

    

    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.1', true);

    wp_enqueue_style('iconic', get_template_directory_uri().'/css/open-iconic-bootstrap.min.css', array(), '0.1.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '0.1.0', 'all');
    wp_enqueue_style('carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '0.1.0', 'all');
    wp_enqueue_style('owl', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '0.1.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css', array(), '0.1.0', 'all');
    wp_enqueue_style('aos', get_template_directory_uri().'/css/aos.css', array(), '0.1.0', 'all');
    wp_enqueue_style('ionicons', get_template_directory_uri().'/css/ionicons.min.css', array(), '0.1.0', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri().'/css/flaticon.css', array(), '0.1.0', 'all');
    wp_enqueue_style('icomoon', get_template_directory_uri().'/css/icomoon.css', array(), '0.1.0', 'all');
    wp_enqueue_style('my-styles', get_template_directory_uri().'/css/style.css', array(), '0.1.0', 'all');
}

function register_menus() {
    register_nav_menus( [
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu'
    ]);
}

function widgets_zones() {
    register_sidebar( [
        'name'=> 'Sidebar 1',
        'id' => 'sidebar-1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        ] );

    register_sidebar( [
        'name'=> 'Sidebar 2',
        'id' => 'sidebar-2',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
         ] );

    register_sidebar( [
        'name'=> 'Sidebar 3',
        'id' => 'sidebar-3',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
         ] );

    register_sidebar( [
        'name'=> 'Sidebar 4',
         'id' => 'sidebar-4',
         'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
         ] );
}


function blog_single_right() {
    register_sidebar([
        'name'=> 'blog single right',
        'id' => 'blog_single_right',
    ]);
}


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));


    acf_add_options_sub_page(array(
        'page_title'  => 'Theme About Settings',
        'menu_title' => 'About',
        'parent_slug' => 'theme-general-settings',
    ));

};

// time to read

function time_to_read() {
    $post = get_post();
    echo round(strlen($post->post_content) /160);
};

add_theme_support('post-thumbnails');

add_filter('comment_form_fields', 'kama_reorder_comment_fields' );


// post author 

add_filter( 'the_author_posts_link', 'filter_the_author_posts_link' );



function filter_the_author_posts_link( $link ) {
	global $authordata;

	if ( ! is_object( $authordata ) ) {
		return;
	}

	$link = sprintf( '<a href="%1$s" title="%2$s" rel="author"> %3$s</a>',
		esc_url( get_author_posts_url( $authordata->ID, $authordata->user_nicename ) ),
		esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ),
		get_the_author()
	);

	return $link;
}




// guttn custom block
/**
 * Register Blocks
 *
 */

        
function be_register_blocks() {
    if( ! function_exists('acf_register_block') )
        return;
    acf_register_block( array(
        'name'			=> 'tabs-block',
        'title'			=> __( 'Custom-Tabs', 'tabs' ),
        'render_template'	=> 'template-parts/about/about-tab-ava.php',
        'category'		=> 'formatting',
        'icon'			=> 'admin-users',
        'mode'			=> 'preview',
        'keywords'		=> array( 'profile', 'user', 'author' )
    ));

    acf_register_block( array(
        'name'			=> 'feedback-block',
        'title'			=> __( 'Custom-feedback', 'feedback' ),
        'render_template'	=> 'template-parts/about/about-feedback.php',
        'category'		=> 'formatting',
        'icon'			=> 'admin-users',
        'mode'			=> 'preview',
        'keywords'		=> array( 'profile', 'user', 'author' )
    ));
}
add_action('acf/init', 'be_register_blocks' );


// comment

function kama_reorder_comment_fields( $fields ){

 $new_fields = [];

 $myorder = ['author','email','website','comment'];

 foreach( $myorder as $key ){
  $new_fields[ $key ] = $fields[ $key ];
  unset( $fields[ $key ] );
 }
 if( $fields )
  foreach( $fields as $key => $val )
   $new_fields[ $key ] = $val;

 return $new_fields;
}

function format_comment($comment, $args, $depth) {
 $GLOBALS['comment'] = $comment; ?>
 <li class="comment">
  <div class="vcard bio">
   <?php echo get_avatar( $comment, 50); ?>
  </div>
  <div class="comment-body">
   <h3><?php comment_author(); ?></h3>
   <div class="meta mb-3"><?php comment_date('F j, Y g:i a');?></div>
   <p><?php comment_text(); ?></p>
   <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
  </div>
 </li>
<?php } ?>
