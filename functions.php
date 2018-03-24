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


?>