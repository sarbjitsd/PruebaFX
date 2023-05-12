<?php

// Reseteo de estilos
function add_normalize_CSS() {
   wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
add_action('wp_enqueue_scripts', 'add_normalize_CSS');

//sidebar
function add_widget_support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}


//Uso de SVG
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');


add_action( 'widgets_init', 'add_widget_support' );
$theme_name_images = get_bloginfo('stylesheet_directory') . 'images/';



// Incluir main Js
function main_js() {
	wp_enqueue_script( 'main_js', 
  					get_stylesheet_directory_uri() . '/assets/js/main.js', 
  					array('jquery'), 
  					'', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'main_js');


//validacion del formulario
function my_custom_scripts() {
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/form-validation.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

//Incluir el custom CSS
wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/css/style.css', false, '1.1', 'all');


// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Incluir Bootstrap CSS icons
function bootstrap_icon() {
	wp_enqueue_style( 'bootstrap_icon', 
  					get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_icon');

// Incluir Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', 
  					array('jquery'), 
  					'4.1.3', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');
    