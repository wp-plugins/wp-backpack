<?php
/*
Plugin Name: WP Backpack
Plugin URI: http://www.christophkleinschmidt.de/wordpress-plugin-wp-backpack
Description: Eine Sammlung von wichtigen Optionen und Funktionen.
Version: 1.3
Author: Christoph Kleinschmidt
Author URI: http://www.christophkleinschmidt.de
License: GPL2

WP Backpack is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
WP Backpack is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with WP Backpack. If not, see http://www.gnu.de/documents/gpl-2.0.de.html.
*/

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'WP-Backpack_File' ) ) {
	define( 'WP-Backpack_File', __FILE__ );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Plugin Optionen Seite
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Actions
if ( is_admin() ){
	add_action('admin_menu', 'wp_backpack_menu');
	add_action('admin_menu', 'wp_backpack_menu_about_link');
	add_action('admin_menu', 'wp_backpack_menu_help_link');
	add_action('admin_head', 'wp_backpack_about_link_skript_add_jquery');
	add_action('admin_head', 'wp_backpack_help_link_skript_add_jquery');
	add_action('admin_init', 'wp_backpack_register_settings');
}

# Menü Haupteintrag 'WP-Backpack'
function wp_backpack_menu() {
 	add_menu_page( 'WP Backpack', 'WP Backpack', 'manage_options', 'allgemein', 'wp_backpack_options_allgemein', plugin_dir_url( __FILE__ ).'/pictures/menu_icon.png');
	add_submenu_page( 'allgemein', 'Allgemein', 'Allgemein', 'manage_options', 'allgemein', 'wp_backpack_options_allgemein');
	add_submenu_page( 'allgemein', 'Einstellungen1', 'Aussehen', 'manage_options', 'einstellungen1', 'wp_backpack_options1');
	add_submenu_page( 'allgemein', 'Einstellungen2', 'Technik', 'manage_options', 'einstellungen2', 'wp_backpack_options2');
	add_submenu_page( 'allgemein', 'Einstellungen3', 'Ähnliche Beiträge', 'manage_options', 'einstellungen3', 'wp_backpack_options3');
}

# Menü Untereintrag 'Über das Plugin' 
function wp_backpack_menu_about_link() {
global $submenu;
$submenu['allgemein'][5] = array('<div id="wp_backpack_about_link_skript">Über das Plugin</div>','manage_options','http://www.christophkleinschmidt.de/wordpress-plugin-wp-backpack/');
}

# Menü Untereintrag 'Dokumentation'
function wp_backpack_menu_help_link() {
global $submenu;
$submenu['allgemein'][6] = array('<div id="wp_backpack_help_link_skript">Dokumentation</div>','manage_options','http://www.christophkleinschmidt.de/wordpress-plugin-wp-backpack-dokumentation/');
}

# Menüeinträge in neuem Tab öffnen
function wp_backpack_about_link_skript_add_jquery() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready( function($) {   
            $('#wp_backpack_about_link_skript').parent().attr('target','_blank');  
        });
    </script>
    <?php
}

function wp_backpack_help_link_skript_add_jquery() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready( function($) {   
            $('#wp_backpack_help_link_skript').parent().attr('target','_blank');  
        });
    </script>
    <?php
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Funktionen des Plugins laden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

require_once dirname( __FILE__ ) .'/wp-backpack-functions.php';

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Optionenseiten des Plugins laden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function wp_backpack_options_allgemein() {
    include 'wp-backpack-allgemein.php';
}

function wp_backpack_options1() {
    include 'wp-backpack-options1.php';
}

function wp_backpack_options2() {
    include 'wp-backpack-options2.php';
}

function wp_backpack_options3() {
    include 'wp-backpack-options3.php';
}
	
?>