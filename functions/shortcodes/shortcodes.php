<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# eigene erstellte Shortcodes
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function shortcode1() {
    return get_option('wp_backpack_input_shortcode_own1');
}

add_shortcode('shortcode1', 'shortcode1');
	
function shortcode2() {
    return get_option('wp_backpack_input_shortcode_own2');
}

add_shortcode('shortcode2', 'shortcode2');

function shortcode3() {
    return get_option('wp_backpack_input_shortcode_own3');
}

add_shortcode('shortcode3', 'shortcode3');
	
function shortcode4() {
    return get_option('wp_backpack_input_shortcode_own4');
}

add_shortcode('shortcode4', 'shortcode4');
	
function shortcode5() {
    return get_option('wp_backpack_input_shortcode_own5');
}

add_shortcode('shortcode5', 'shortcode5');
	
?>