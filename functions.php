<?php

function my_excerpt_length($length) {
    return 35;
}

add_filter('excerpt_length' , 'my_excerpt_length', 999);

set_post_thumbnail_size(150,150);
add_theme_support('post-thumbnails');

// register our navigations!
register_nav_menus(array(
    'primary' => 'Primary Menu',
    'news' => 'News Menu',
    'footer' => 'Footer Menu',
    'cite'=> 'Cite Menu'
));

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );
    add_filter('widget_text', 'do_shortcode');

//linking to astuteo
function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


function final_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar Blog', 'final'),
            'id'            => 'sidebar-blog',
            'description'   => esc_html__('Our blog widget', 'final'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          =>esc_html__('Sidebar News', 'final'),
            'id'            =>'sidebar-news',
            'description'   =>esc_html__('Our News widget', 'final'),
            'before_widget' =>'<section id="%1$s" class="widget %2$s">',
            'after_widget'  =>'</section>',
            'before_title'  =>'<h3 class="widget-title">',
            'after_title'   =>'</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          =>esc_html__('Sidebar About', 'final'),
            'id'            =>'sidebar-about',
            'description'   =>esc_html__('Our about widget', 'final'),
            'before_widget' =>'<section id="%1$s" class="widget %2$s">',
            'after_widget'  =>'</section>',
            'before_title'  =>'<h3 class="widget-title">',
            'after_title'   =>'</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          =>esc_html__('Sidebar Footer Content', 'final'),
            'id'            =>'sidebar-footer-content',
            'description'   =>esc_html__('Our footer content widget', 'final'),
            'before_widget' =>'<section id="%1$s" class="widget %2$s">',
            'after_widget'  =>'</section>',
            'before_title'  =>'<h3 class="widget-title">',
            'after_title'   =>'</h3>',
        )
    );
}
    add_action('widgets_init', 'final_widgets_init');

//  Functions to display a list of all the shortcodes
function diwp_get_list_of_shortcodes(){
 
    // Get the array of all the shortcodes
    global $shortcode_tags;
     
    $shortcodes = $shortcode_tags;
     
    // sort the shortcodes with alphabetical order
    ksort($shortcodes);
     
    $shortcode_output = "<ul>";
     
    foreach ($shortcodes as $shortcode => $value) {
        $shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
    }
     
    $shortcode_output = $shortcode_output. "</ul>";
     
    return $shortcode_output;
 
}
add_shortcode('get-shortcode-list', 'diwp_get_list_of_shortcodes');


function covid_disclaimer() {
        return '<small> Before you purchase your tickets, check with everyone that you can think of to make sure that you are good to go, because these tickets are not  refundable</small>';
    }
    add_shortcode('disclaimer', 'covid_disclaimer');


function today_date() {
    return date("l\, F jS Y ");
}

add_shortcode('current_date', 'today_date');

function year() {
    return date('Y');
}
add_shortcode('current_year', 'year');
remove_filter('the_content', 'wpautop');