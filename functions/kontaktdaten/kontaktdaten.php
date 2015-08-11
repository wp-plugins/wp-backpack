<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Standard Kontaktdaten im Dashboard und Footer einbinden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Kontaktdaten im Footer
function ck_backend_footer() {
    echo "Konzeption und Erstellung des Internetauftritts: Christoph Kleinschmidt, Tel: 017623330719, Mail: <a href='mailto:mail@christophkleinschmidt.de' target='_blank'>mail@christophkleinschmidt.de</a>, Web: <a href='http://www.christophkleinschmidt.de' target='_blank'>www.christophkleinschmidt.de</a>";
} 
add_filter('admin_footer_text', 'ck_backend_footer');

# Kontaktdaten im Dashboard
add_action('wp_dashboard_setup', 'ck_dashboard_kontakt');

function ck_dashboard_kontakt() {
	global $wp_meta_boxes;
wp_add_dashboard_widget('custom_kontakt_widget', 'Christoph Kleinschmidt Support', 'custom_dashboard_kontakt');
}

function custom_dashboard_kontakt() {
	echo '<p>Konzeption und Erstellung des Internetauftritts:<br><br>Christoph Kleinschmidt<br>Tel: 017623330719<br>Mail: <a href="mailto:mail@christophkleinschmidt.de" target="_blank">mail@christophkleinschmidt.de</a><br>Web: <a href="http://www.christophkleinschmidt.de" target="_blank">www.christophkleinschmidt.de</a></p>';
}

?>