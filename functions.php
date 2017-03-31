<?php
/**
* Functions
*/

//Require included files
require_once STYLESHEETPATH . '/includes/cws-theme-class.php';

add_theme_support( 'post-thumbnails' );

function theme_styles() {

        wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

        global $wp_scripts;

        wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false );
        wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

        $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
        $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

        wp_enqueue_script( 'bottstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

//add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );

function register_theme_menus() {
        register_nav_menus(
                array(
                        'header-menu'   => __( 'Header Menu' )
                )
        );
}
add_action( 'init', 'register_theme_menus' );

add_theme_support( 'custom-header' );

$defaults = array(
        'default-image'          => '',
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'uploads'                => true,
        'random-default'         => false,
        'header-text'            => true,
        'default-text-color'     => '',
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

function static_front_posts(){  if (is_front_page()) {  ?>  
        <div id="my-static-front-posts">  <?php  $custom_loop = new WP_Query('showposts=10&orderby=date');  if ( $custom_loop->have_posts() ) :  while ( $custom_loop->have_posts() ) : $custom_loop->the_post();  echo '<div class="post type-post hentry post_box top">';  echo '<div class="headline_area"><h2 class="entry-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';  echo '<p class="headline_meta"><abbr title="" class="published">' . get_the_date() . '</abbr></p></div>';  echo '<div class="format_text entry-content"><p>' . get_the_excerpt() . '</p></div>';  echo '<a href="' . get_permalink() . '">' . '<span class="more-button">Read More</span></a>';  echo '</div>';  endwhile;  wp_reset_query();  endif;  ?></div><?php   }   }  add_action('thesis_hook_after_content','static_front_posts');

function custom_excerpt_length( $length ) {
        return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * add widgets
 */

function create_widget( $name, $id, $description ) {

        register_sidebar(array(
                'name' => __( $name ),   
                'id' => $id, 
                'description'   => __( $description ),
                'before_widget' => '<div class="widget">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>'
        ));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
create_widget( 'Contact Page Right', 'contact-right', 'Displays on the side of contact page with a sidebar.' );




/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

        register_sidebar( array(
                'name'          => 'Home right sidebar',
                'id'            => 'home_right_1',
                'before_widget' => '<div>',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="rounded">',
                'after_title'   => '</h2>',
        ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );




