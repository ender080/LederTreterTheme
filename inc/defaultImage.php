<?php/*add default featured thumbnail*/

function codearosa_post_thumbnail_html( $html ) {
    // If there is no post thumbnail,
    // Return a default image
    if ( '' == $html ) {
        return '<img src="' . get_bloginfo( 'url' ) . '/wp-content/uploads/2019/04/Zeichnung.svg" />';
    }
    // Else, return the post thumbnail
    return $html;
}
add_filter( 'post_thumbnail_html', 'codearosa_post_thumbnail_html' );
