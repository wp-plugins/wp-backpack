<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Menüpunkte für bestimmte User ausblenden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

add_action('admin_menu', 'remove_menus');
function remove_menus(){
    $user = wp_get_current_user();
	$email1 = get_option('wp_backpack_menuepunkte_input_email1');
	$email2 = get_option('wp_backpack_menuepunkte_input_email2');
	$email3 = get_option('wp_backpack_menuepunkte_input_email3');
	
	if ( current_user_can('administrator'))
		{
		//do nothing
		}		
	else	
		
#	if( $user && isset($email1) or
#		$user && isset($email2) or
#	   	$user && isset($email3)	) 
	
	{
		if(get_option('wp_backpack_menuepunkte_check_dashboard') == 1)
			{
		remove_menu_page('index.php');
    		}
		if(get_option('wp_backpack_menuepunkte_check_jetpack') == 1)
			{
		remove_menu_page('jetpack');
    		}
		if(get_option('wp_backpack_menuepunkte_check_tools') == 1)
			{
		remove_menu_page('tools.php');
    		}
		if(get_option('wp_backpack_menuepunkte_check_themes') == 1)
			{
        remove_menu_page('themes.php');
    		}
		if(get_option('wp_backpack_menuepunkte_check_options_general') == 1)
			{
        remove_menu_page('options-general.php');
    		}
		if(get_option('wp_backpack_menuepunkte_check_plugins') == 1)
			{
        remove_menu_page('plugins.php');
    		}		
		if(get_option('wp_backpack_menuepunkte_check_users') == 1)
			{
		remove_menu_page('users.php');
    		}		
		if(get_option('wp_backpack_menuepunkte_check_edit_comments') == 1)
			{
		remove_menu_page('edit-comments.php');
    		}		
		if(get_option('wp_backpack_menuepunkte_check_upload') == 1)
			{
		remove_menu_page('upload.php');
    		}		
		if(get_option('wp_backpack_menuepunkte_check_edit_page') == 1)
			{
		remove_menu_page('edit.php?post_type=page'); 
    		}	
		if(get_option('wp_backpack_menuepunkte_check_qa_link') == 1)
			{
		remove_menu_page('edit.php?post_type=qa_link');
    		}
		if(get_option('wp_backpack_menuepunkte_check_us_portfolio') == 1)
			{
		remove_menu_page('edit.php?post_type=us_portfolio');
    		}
		if(get_option('wp_backpack_menuepunkte_check_us_client') == 1)
			{
		remove_menu_page('edit.php?post_type=us_client');		
    		}
		if(get_option('wp_backpack_menuepunkte_check_wpcf7') == 1)
			{
		remove_menu_page('wpcf7');
    		}
		if(get_option('wp_backpack_menuepunkte_check_wpseo_dashboard') == 1)
			{
		remove_menu_page('wpseo_dashboard');		
    		}
		if(get_option('wp_backpack_menuepunkte_check_TweetOldPost') == 1)
			{
		remove_menu_page('TweetOldPost');		
    		}
		if(get_option('wp_backpack_menuepunkte_check_itsec') == 1)
			{
		remove_menu_page('itsec');		
    		}
		if(get_option('wp_backpack_menuepunkte_check_purechat_menu') == 1)
			{
		remove_menu_page('purechat-menu');
    		}
		if(get_option('wp_backpack_menuepunkte_check_revslider') == 1)
			{
		remove_menu_page('revslider');		
    		}
		if(get_option('wp_backpack_menuepunkte_check_einstellungen') == 1)
			{
		remove_menu_page('einstellungen');		
    		}
		if(get_option('wp_backpack_menuepunkte_check_quick_admin_links') == 1)
			{
		remove_menu_page('quick-admin-links');		
    		}
		if(get_option('wp_backpack_menuepunkte_check_gadash_settings') == 1)
			{
		remove_menu_page('gadash_settings');		
    		}
		if(get_option('wp_backpack_menuepunkte_check_edit') == 1)
			{
		remove_menu_page('edit.php');
    		}
		if(get_option('wp_backpack_menuepunkte_check_wysija_campaigns') == 1)
			{
		remove_menu_page('wysija_campaigns');
    		}
	}
}
add_action( 'admin_menu', 'remove_menus',999 );
?>