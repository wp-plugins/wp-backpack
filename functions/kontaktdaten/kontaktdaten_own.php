<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# eigene Kontaktdaten im Dashboard und Footer einbinden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Kontaktdaten im Footer
function ck_backend_footer_own () {
    echo get_option('wp_backpack_kontaktdaten_footer_input_own');
} 
add_filter('admin_footer_text', 'ck_backend_footer_own');

# Kontaktdaten im Dashboard
add_action('wp_dashboard_setup', 'ck_dashboard_kontakt_own');
function ck_dashboard_kontakt_own() {
	global $wp_meta_boxes;
wp_add_dashboard_widget('custom_kontakt_widget_own', 'Kontaktdaten', 'custom_dashboard_kontakt_own');
}

function custom_dashboard_kontakt_own() {
    echo get_option('wp_backpack_kontaktdaten_dashboard_input_own1');
	echo '<br>';
	echo get_option('wp_backpack_kontaktdaten_dashboard_input_own2');
	echo '<br>';
	echo get_option('wp_backpack_kontaktdaten_dashboard_input_own3');
	echo '<br>';
	echo get_option('wp_backpack_kontaktdaten_dashboard_input_own4');	
	echo '<br>';
	echo get_option('wp_backpack_kontaktdaten_dashboard_input_own5');	
	echo '<br>';
	echo get_option('wp_backpack_kontaktdaten_dashboard_input_own6');	
}

?>