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

/**add the text title and site tagline to the logo**/
// === Try to do it with output buffering === //

function dbftextlogo_set_up_buffer(){
    if ( is_feed() || is_admin() ){ return; }
    try {
        if (ini_get('output_buffering')) {
            ob_start('dbftextlogo_filter_page');
        }
    } catch (Exception $e) { }
}
add_action('wp', 'dbftextlogo_set_up_buffer', 10, 0);

function dbftextlogo_filter_page($content){
    $title = esc_html(get_bloginfo('name'));
    $tagline = esc_html(get_bloginfo('description'));
    $content = preg_replace('#(<img.*id="logo".*/>)#U','\\1<h1 id="logo-text">'.$title.'</h1> <h5 id="logo-tagline">'.$tagline.'</h5>', $content);
    return $content;
}

// === jQuery fallback if unable to do via output buffering === //

function dbftextlogo_wp_head() { ?>
    <style>
        #logo { padding-right: 10px; }
        #logo-text, #logo-tagline {
            margin:0;
            padding:0;
            display:inline;
            vertical-align: middle;
        }
        #logo-tagline { opacity: 0.7; margin-left: 16px; vertical-align: sub; }
        @media only screen and (max-width: 767px) {
            #logo-tagline { display: none; }
        }
        .et_hide_primary_logo .logo_container { height: 100% !important; opacity: 1 !important; }
        .et_hide_primary_logo .logo_container #logo { display: none; }

    </style>
    <script>
        jQuery(function($) {
            if (!$('#logo-text').length) {
                $('#logo').after('<h1 id="logo-text"><?php esc_html_e(get_bloginfo('name')); ?></h1> <h5 id="logo-tagline"><?php esc_html_e(get_bloginfo('description')); ?></h5>');
            }
        });
    </script>
    <?php
}
add_action('wp_head', 'dbftextlogo_wp_head');
?>

?>