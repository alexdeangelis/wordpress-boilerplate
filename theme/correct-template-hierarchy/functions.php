<?php ///Register Menus
function register_menus() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_menus' );


//Enqueue CSS & JS

function your_scripts() {
    /*Google Fonts*/
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700' );
    /*Bootstrap 3*/
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    /*Bootstrap 3 Theme*/
    wp_enqueue_style( 'bootstrap-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );
    /*Font Awesome*/
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css' );
    /*Owl Carousel*/
    wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
    /*Owl Carousel Theme*/
    wp_enqueue_style( 'owl-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
    /*My Styles*/
    wp_enqueue_style( 'styles', get_stylesheet_uri() );
    /*Bootstrap JS*/
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
    /*Owl Carousel JS*/
    wp_enqueue_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), null, false);
}
add_action( 'wp_enqueue_scripts', 'your_scripts' );


//Create options settings page
/*if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}*/

//Post Thumbnails support
add_theme_support( 'post-thumbnails' );

//Allow logo in customizer
add_theme_support( 'custom-logo' );