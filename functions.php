<?php
/**
 * Created by PhpStorm.
 * User: akline
 * Date: 23/01/2018
 * Time: 17:39
 */

function my_change_featured_size( $image_sizes ) {
    unset( $image_sizes['2880x1800'] );
    $image_sizes['1920x1080'] = 'et-pb-post-main-image-fullwidth-large';

    return $image_sizes;
}
add_filter( 'et_theme_image_sizes', 'my_change_featured_size' );

//add animate.css and wow.js files for aimation effects
//* Enqueue Animate.CSS and WOW.js
add_action( 'wp_enqueue_scripts', 'sk_enqueue_scripts' );
function sk_enqueue_scripts() {
    wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.min.css' );
    wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '', true );
}
//* Enqueue script to activate WOW.js
add_action( 'wp_enqueue_scripts', 'sk_wow_init_in_footer' );
function sk_wow_init_in_footer() { add_action( 'print_footer_scripts', 'wow_init' );}
//* Add JavaScript before
function wow_init() { ?>
    <script type="text/javascript">
        new WOW().init(); </script>
<?php }

?>