<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Registrierung Plugin Funktionen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function wp_backpack_register_settings() {
	register_setting( 'wp_backpack_group1', 'wp_backpack_umbenennen');
	register_setting( 'wp_backpack_group1', 'wp_backpack_favicon');
	register_setting( 'wp_backpack_group1', 'wp_backpack_input_favicon_own');
	register_setting( 'wp_backpack_group1', 'wp_backpack_id');
	register_setting( 'wp_backpack_group1', 'wp_backpack_kontaktdaten');
	register_setting( 'wp_backpack_group1', 'wp_backpack_kontaktdaten_footer_input_own');
	register_setting( 'wp_backpack_group1', 'wp_backpack_kontaktdaten_dashboard_input_own1');
	register_setting( 'wp_backpack_group1', 'wp_backpack_kontaktdaten_dashboard_input_own2');
	register_setting( 'wp_backpack_group1', 'wp_backpack_kontaktdaten_dashboard_input_own3');
	register_setting( 'wp_backpack_group1', 'wp_backpack_kontaktdaten_dashboard_input_own4');
	register_setting( 'wp_backpack_group1', 'wp_backpack_kontaktdaten_dashboard_input_own5');
	register_setting( 'wp_backpack_group1', 'wp_backpack_kontaktdaten_dashboard_input_own6');
	register_setting( 'wp_backpack_group1', 'wp_backpack_login');
	register_setting( 'wp_backpack_group1', 'wp_backpack_login_own_input1');
	register_setting( 'wp_backpack_group1', 'wp_backpack_login_own_input2');
	register_setting( 'wp_backpack_group1', 'wp_backpack_login_own_input3');
	register_setting( 'wp_backpack_group1', 'wp_backpack_login_own_input4');
	register_setting( 'wp_backpack_group1', 'wp_backpack_login_own_input5');
	register_setting( 'wp_backpack_group1', 'wp_backpack_login_own_input6');
	register_setting( 'wp_backpack_group1', 'wp_backpack_login_own_input7');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_input_email1');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_input_email2');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_input_email3');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_dashboard');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_jetpack');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_tools');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_themes');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_options_general');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_plugins');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_users');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_edit_comments');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_upload');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_edit_page');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_qa_link');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_us_portfolio');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_us_client');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_wpcf7');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_wpseo_dashboard');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_TweetOldPost');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_itsec');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_purechat_menu');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_revslider');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_einstellungen');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_quick_admin_links');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_gadash_settings');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_edit');
	register_setting( 'wp_backpack_group1', 'wp_backpack_menuepunkte_check_wysija_campaigns');
	register_setting( 'wp_backpack_group1', 'wp_backpack_wp_logo');
	register_setting( 'wp_backpack_group2', 'wp_backpack_confirm');
	register_setting( 'wp_backpack_group2', 'wp_backpack_rss');
	register_setting( 'wp_backpack_group2', 'wp_backpack_shortlink');
	register_setting( 'wp_backpack_group2', 'wp_backpack_update_nachricht');
	register_setting( 'wp_backpack_group2', 'wp_backpack_speichernutzung');
	register_setting( 'wp_backpack_group2', 'wp_backpack_letzte_beitraege');
	register_setting( 'wp_backpack_group2', 'wp_backpack_password');
	register_setting( 'wp_backpack_group2', 'wp_backpack_ranking');
	register_setting( 'wp_backpack_group2', 'wp_backpack_shortcodes');
	register_setting( 'wp_backpack_group2', 'wp_backpack_input_shortcode_own1');
	register_setting( 'wp_backpack_group2', 'wp_backpack_input_shortcode_own2');
	register_setting( 'wp_backpack_group2', 'wp_backpack_input_shortcode_own3');
	register_setting( 'wp_backpack_group2', 'wp_backpack_input_shortcode_own4');
	register_setting( 'wp_backpack_group2', 'wp_backpack_input_shortcode_own5');
	register_setting( 'wp_backpack_group3', 'wp_backpack_related_posts_anzeige');
	register_setting( 'wp_backpack_group3', 'wp_backpack_related_posts_anzahl');
	register_setting( 'wp_backpack_group3', 'wp_backpack_related_posts_anzahl_number');
	register_setting( 'wp_backpack_group3', 'wp_backpack_related_posts_kategorie');
	register_setting( 'wp_backpack_group3', 'wp_backpack_related_posts_seiten');
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Menüpunkte und Begriffe seitenweit umbenennen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_umbenennen') == 1){
 	require_once dirname( __FILE__ ) .'/functions/umbenennen/umbenennen.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Favicon im Backend anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_favicon') == 1){
	require_once dirname( __FILE__ ) .'/functions/favicon/favicon_own.php';
}
else {
	require_once dirname( __FILE__ ) .'/functions/favicon/favicon.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# IDs von Beiträgen und Seiten im Backend anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_id') == 1){
	require_once dirname( __FILE__ ) .'/functions/id/id.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Kontaktdaten im Dashboard und Footer einbinden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_kontaktdaten') == 1){
	require_once dirname( __FILE__ ) .'/functions/kontaktdaten/kontaktdaten_own.php';
}
else {
	require_once dirname( __FILE__ ) .'/functions/kontaktdaten/kontaktdaten.php';
}
	
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# angepasster Login Screen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_login') == 1){
	require_once dirname( __FILE__ ) .'/functions/login/login_own.php';
}
else {
	require_once dirname( __FILE__ ) .'/functions/login/login.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Menüpunkte für bestimmte User ausblenden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_menuepunkte') == 1){
 	require_once dirname( __FILE__ ) .'/functions/menuepunkte/menuepunkte.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Anzahl der Related Posts unter einem Beitrag ändern
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_related_posts_anzahl') == 1){
	require_once dirname( __FILE__ ) .'/functions/related-posts/related-posts-anzahl.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# spezielle Anzeige der Related Posts
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_related_posts_anzeige') == 1){
	require_once dirname( __FILE__ ) .'/functions/related-posts/related-posts-anzeige.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# bestimmte Kategorien aus den Related Posts entfernen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_related_posts_kategorie') == 1){
	require_once dirname( __FILE__ ) .'/functions/related-posts/related-posts-kategorien.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Related Posts auf bestimmten Seiten nicht anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_related_posts_seiten') == 1){
	require_once dirname( __FILE__ ) .'/functions/related-posts/related-posts-seiten.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Bestätigungsmeldung vor der Veröffentlichung eines Beitrages
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_confirm') == 1){
	require_once dirname( __FILE__ ) .'/functions/confirm-post/confirm-post.php';
}
	
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# RSS Feed mit Thumbnail verteilen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_rss') == 1){
	require_once dirname( __FILE__ ) .'/functions/rss-thumbnail/rss-thumbnail.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# alle WordPress-Shortlink-Anfragen werden voll aufgelöst - kein Umwandlung in Shortlink wp.link
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_shortlink') == 1){
	require_once dirname( __FILE__ ) .'/functions/shortlink/shortlink.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Update-Nachricht nur dem Administrator anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_update_nachricht') == 1){
	require_once dirname( __FILE__ ) .'/functions/update-nachrichten/update-nachrichten.php';
}
	
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Speichernutzung des Blogs anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_speichernutzung') == 1){
	require_once dirname( __FILE__ ) .'/functions/speichernutzung/speichernutzung.php';
}
	
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# WordPress Logo in Admin Bar im Backend entfernen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_wp_logo') == 1){
	require_once dirname( __FILE__ ) .'/functions/wp-logo/wp-logo.php';
}
	
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# letzte Blog-Beiträge mit Shortcode anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_letzte_beitraege') == 1){
	require_once dirname( __FILE__ ) .'/functions/latest-post-shortcode/latest-post-shortcode.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Plugins, Themes, etc. ohne Passwort installieren
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_password') == 1){
	require_once dirname( __FILE__ ) .'/functions/password/password.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Anzeige der wichtigsten Website Rankings im Dashboard
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_ranking') == 1){
	require_once dirname( __FILE__ ) .'/functions/ranking/ranking.php';
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Shortcodes
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(get_option('wp_backpack_shortcodes') == 1){
	require_once dirname( __FILE__ ) .'/functions/shortcodes/shortcodes.php';
}
	
?>