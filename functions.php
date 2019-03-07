<?php
 
 add_theme_support( 'post-thumbnails' );
 add_theme_support( 'widgets' );

function detd_styles()
{
   // REGISTER
   wp_register_style('MD','https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css');
   wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
   wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
    wp_register_style('main', get_template_directory_uri() . '/css/main.css');
    
    // ENQUEUE
   wp_enqueue_style('fontawesome');
    wp_enqueue_style('bootstrap');
   wp_enqueue_style('flexslider');
   wp_enqueue_style('MD');
    wp_enqueue_style('main');


   if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        
        // REGISTER
       wp_register_script('MDjs', 'https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js','' ,'' ,'', true);
       wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js','' ,'' ,'', true);
       wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js','' ,'' ,'', true);
       wp_register_script('util', get_template_directory_uri() . '/js/util.js','' ,'' ,'', true);
       wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js','' ,'' ,'', true);
       wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js','' ,'' ,'', true);
       wp_register_script('flexsliderjs', get_template_directory_uri() . '/js/flexslider.js','' ,'' ,'', true);

        // ENQUEUE
       wp_enqueue_script('MDjs');
       wp_enqueue_script('jquery');
       wp_enqueue_script('popper');
       wp_enqueue_script('util');
       wp_enqueue_script('bootstrapjs');
       wp_enqueue_script('mainjs');
      //  wp_enqueue_script('flexsliderjs');
       
        
   }
}
add_action('wp_enqueue_scripts', 'detd_styles');

function register_my_menus(){
   register_nav_menus(
     array(
       'main'  => 'Main menu DetD',
       'footer'  => 'Footer menu DetD'
     ));
  }
  
  add_action('init', 'register_my_menus');
  
  function bongo_wp_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
  }
  add_action('init', 'bongo_wp_pagination');

function dd_scripts()
{
    wp_enqueue_script( 'jquery' );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', 'style' );
    wp_enqueue_style( 'dd_style', get_stylesheet_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'dd_scripts' );

function aside_widgets_init() {

    register_sidebar( array(

        'name' => 'Aside',
        'id' => 'aside-widget-area',
        'before_widget' => '<div class="nwa-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="nwa-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'aside_widgets_init' );
