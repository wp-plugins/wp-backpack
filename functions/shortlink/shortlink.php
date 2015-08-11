<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# alle WordPress-Shortlink-Anfragen werden voll aufgelöst - kein Umwandlung in Shortlink wp.link
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function ck_get_shortlink() {
    global $post;
 
    if ( !$post )
        return;
 
    return get_permalink($post->ID);
}
add_filter( 'get_shortlink', 'ck_get_shortlink' );

?>