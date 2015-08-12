<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  Tab Einstellungen 1 -->
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<div class="wrap">
	<div id="icon-options-general" class="icon32">
	<br>
</div>
<h2><?php echo '<img src="' . plugins_url( '/wp-backpack/pictures/menu_icon.png') . '"> ';?>WP Backpack</h2>
<div style="display:block; text-align:left; float:left;">von Christoph Kleinschmidt, Tel: 017623330719, Mail: <a href='mailto:mail@christophkleinschmidt.de' target='_blank'>mail@christophkleinschmidt.de</a>, Web: <a href='http://www.christophkleinschmidt.de' target='_blank'>www.christophkleinschmidt.de</a></div>
<div style="display:block; text-align:right;">WP Backpack Version 1.3.3</div>
<hr>
<h2 class="nav-tab-wrapper">
	<a href="/wp-admin/admin.php?page=allgemein" class="nav-tab">Allgemein</a>
    <a href="/wp-admin/admin.php?page=einstellungen1" class="nav-tab nav-tab-active">Aussehen</a>
	<a href="/wp-admin/admin.php?page=einstellungen2" class="nav-tab">Technik</a>
	<a href="/wp-admin/admin.php?page=einstellungen3" class="nav-tab">Ähnliche Beiträge</a>
	<a href="/wp-admin/admin.php?page=einstellungen4" class="nav-tab">WP Plugin Tipps</a>
</h2>	
<h3 style="font-style:italic;">
	Bitte Aktivieren oder Deaktivieren Sie Ihre Einstellungen und speichern Sie diese anschließend.
	Hilfe finden Sie in dieser <a href='http://www.christophkleinschmidt.de/wordpress-plugin-wp-backpack-dokumentation' target='_blank'>Dokumentation</a>.
</h3>	
<form method="post" action="options.php">
<?php settings_fields('wp_backpack_group1'); ?>
	<table class="form-table">
		<tr valign="top">
			<th scope="row">
				Begriffe umbenennen
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_umbenennen" value="1" <?php  if(get_option('wp_backpack_umbenennen') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("WordPress Menüpunkte und Begriffe seitenweit umbenennen"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Anzeige eines Favicon im Backend
			</th>
				<td>
					<input type="radio" name="wp_backpack_favicon" value="0" <?php  if(get_option('wp_backpack_favicon') == 0) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("mitgeliefertes Standard Favicon im Backend anzeigen lassen:"); ?></span>
					<?php echo '<img src="' . plugins_url( '/wp-backpack/pictures/favicon.ico') . '" > ';?>
					<br>
					<br>
					<input type="radio" name="wp_backpack_favicon" value="1" <?php  if(get_option('wp_backpack_favicon') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("eigenes Favicon im Backend anzeigen lassen"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in diesem Feld den Pfad zum gewünschten Favicon ein:"); ?>
					<input type="text" name="wp_backpack_input_favicon_own"	value="<?php echo get_option('wp_backpack_input_favicon_own'); ?>" /> z. Bsp. http://www.example.com/favicon.ico
					<div>
					gespeichertes Favicon: <?php echo '<img src="' . get_option("wp_backpack_input_favicon_own") . '" > ';?>
					</div>
				    </span>
				</td>
		</tr>		
		<tr valign="top">
			<th scope="row">
				IDs
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_id" value="1" <?php  if(get_option('wp_backpack_id') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("IDs von Beiträgen und Seiten werden im Backend angezeigt"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Backend Kontaktdaten
			</th>
				<td>
					<input type="radio" name="wp_backpack_kontaktdaten" value="0" <?php  if(get_option('wp_backpack_kontaktdaten') == 0) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Standard Kontaktdaten im Dashboard und Footer einbinden (Christoph Kleinschmidt)"); ?></span>
					<br>
					<br>
					<input type="radio" name="wp_backpack_kontaktdaten"	value="1" <?php  if(get_option('wp_backpack_kontaktdaten') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("eigene Kontaktdaten im Dashboard und Footer einbinden"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie im folgenden Feld den gewünschten Text für den Backend <strong>Footer</strong> ein:"); ?>
					<input type="text" name="wp_backpack_kontaktdaten_footer_input_own"	value="<?php echo get_option('wp_backpack_kontaktdaten_footer_input_own'); ?>" /> z. Bsp. Max Mustermann, Musterstr. 3, 12345 Musterstadt, Tel. 0123456789, etc.<br>
					gespeicherte Kontaktdaten für den Backend Footer: <?php echo get_option('wp_backpack_kontaktdaten_footer_input_own'); ?>
					</span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in den folgenden Feldern den gewünschten Text für das <strong>Dashboard</strong> ein:<br>"); ?>
					Daten für die 1. Zeile im Dashboard: <input type="text" name="wp_backpack_kontaktdaten_dashboard_input_own1"	value="<?php echo get_option('wp_backpack_kontaktdaten_dashboard_input_own1'); ?>" /> z. Bsp. Max Mustermann<br>
					Daten für die 2. Zeile im Dashboard: <input type="text" name="wp_backpack_kontaktdaten_dashboard_input_own2"	value="<?php echo get_option('wp_backpack_kontaktdaten_dashboard_input_own2'); ?>" /> z. Bsp. Musterstraße 1<br>
					Daten für die 4. Zeile im Dashboard: <input type="text" name="wp_backpack_kontaktdaten_dashboard_input_own4"	value="<?php echo get_option('wp_backpack_kontaktdaten_dashboard_input_own4'); ?>" /> z. Bsp. Tel.: 123456789<br>
					Daten für die 3. Zeile im Dashboard: <input type="text" name="wp_backpack_kontaktdaten_dashboard_input_own3"	value="<?php echo get_option('wp_backpack_kontaktdaten_dashboard_input_own3'); ?>" /> z. Bsp. 12345 Musterstadt<br>
					Daten für die 5. Zeile im Dashboard: <input type="text" name="wp_backpack_kontaktdaten_dashboard_input_own5"	value="<?php echo get_option('wp_backpack_kontaktdaten_dashboard_input_own5'); ?>" /> z. Bsp. Mail: test@test.de<br>
					Daten für die 6. Zeile im Dashboard: <input type="text" name="wp_backpack_kontaktdaten_dashboard_input_own6"	value="<?php echo get_option('wp_backpack_kontaktdaten_dashboard_input_own6'); ?>" /> z. Bsp. Web: www.example.com
					</span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Login Screen
			</th>
				<td>
					<input type="radio" name="wp_backpack_login" value="0" <?php  if(get_option('wp_backpack_login') == 0) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("mitgelieferter Standard Login Screen wird verwendet (Christoph Kleinschmidt)"); ?></span>
					<br>
					<br>
					<input type="radio" name="wp_backpack_login" value="1" <?php  if(get_option('wp_backpack_login') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("einen eigenen Login Screen verwenden"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in den folgenden Feldern die gewünschten Inhalte für den Login Screen ein:<br>"); ?>
					Pfad zum Logo im Kopfbereich: <input type="text" name="wp_backpack_login_own_input1"	value="<?php echo get_option('wp_backpack_login_own_input1'); ?>" /> z. Bsp. http://www.example.com/logo.jpg<br>
					Daten für die 1. Zeile im unteren Login Screen: <input type="text" name="wp_backpack_login_own_input2"	value="<?php echo get_option('wp_backpack_login_own_input2'); ?>" /> z. Bsp. Max Mustermann<br>
					Daten für die 2. Zeile im unteren Login Screen: <input type="text" name="wp_backpack_login_own_input3"	value="<?php echo get_option('wp_backpack_login_own_input3'); ?>" /> z. Bsp. Musterstraße 1<br>
					Daten für die 3. Zeile im unteren Login Screen: <input type="text" name="wp_backpack_login_own_input4"	value="<?php echo get_option('wp_backpack_login_own_input4'); ?>" /> z. Bsp. Tel.: 123456789<br>
					Daten für die 4. Zeile im unteren Login Screen: <input type="text" name="wp_backpack_login_own_input5"	value="<?php echo get_option('wp_backpack_login_own_input5'); ?>" /> z. Bsp. 12345 Musterstadt<br>
					Daten für die 5. Zeile im unteren Login Screen: <input type="text" name="wp_backpack_login_own_input6"	value="<?php echo get_option('wp_backpack_login_own_input6'); ?>" /> z. Bsp. Mail: test@test.de<br>
					Daten für die 6. Zeile im unteren Login Screen: <input type="text" name="wp_backpack_login_own_input7"	value="<?php echo get_option('wp_backpack_login_own_input7'); ?>" /> z. Bsp. Web: www.example.com
					</span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Menüpunkte ausblenden
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_menuepunkte" value="1" <?php  if(get_option('wp_backpack_menuepunkte') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("gewünschte Menüpunkte für bestimmte Benutzer ausblenden"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in den folgenden Feldern die E-Mail-Adressen der Benutzer ein:<br>"); ?>
					Email 1: <input type="text" name="wp_backpack_menuepunkte_input_email1"	value="<?php echo get_option('wp_backpack_menuepunkte_input_email1'); ?>" /> z. Bsp. test@test.de<br>
					Email 2: <input type="text" name="wp_backpack_menuepunkte_input_email2"	value="<?php echo get_option('wp_backpack_menuepunkte_input_email2'); ?>" /> z. Bsp. test@test.de<br>
					Email 3: <input type="text" name="wp_backpack_menuepunkte_input_email3"	value="<?php echo get_option('wp_backpack_menuepunkte_input_email3'); ?>" /> z. Bsp. test@test.de<br>
					</span>
					<br>
					<span class="description"><?php _e("Bitte geben Sie die zu ausblendenden Menüpunkte hier an:<br>"); ?>
					<br>
					<input type="checkbox" name="wp_backpack_menuepunkte_check_dashboard" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_dashboard') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Dashboard"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_jetpack"	value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_jetpack') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Jetpack"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_tools" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_tools') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Werkzeuge"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_themes" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_themes') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Design"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_options_general"	value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_options_general') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Einstellungen"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_plugins"	value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_plugins') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Plugins"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_users" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_users') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Benutzer"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_edit_comments" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_edit_comments') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Kommentare"); ?></span><br>
					<input type="checkbox" name="wp_backpack_menuepunkte_check_upload" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_upload') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Medien"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_edit_page" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_edit_page') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Seiten"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_qa_link"	value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_qa_link') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("QLinks"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_us_portfolio" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_us_portfolio') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Portfolio"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_us_client" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_us_client') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Clients Logos"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_wpcf7" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_wpcf7') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Formulare"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_wpseo_dashboard"	value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_wpseo_dashboard') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("SEO"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_TweetOldPost" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_TweetOldPost') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Revive Old Post"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_itsec" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_itsec') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Security"); ?></span><br>
					<input type="checkbox" name="wp_backpack_menuepunkte_check_purechat_menu" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_purechat_menu') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Pure Chat"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_revslider" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_revslider') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Revolution Slider"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_einstellungen" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_einstellungen') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("WP Backpack"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_quick_admin_links" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_quick_admin_links') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Quick Admin Links"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_gadash_settings"	value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_gadash_settings') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Google Analytics"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_edit" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_edit') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Beiträge"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_wysija_campaigns" value="1" <?php  if(get_option('wp_backpack_menuepunkte_check_wysija_campaigns') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("MailPoet"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				WordPress Logo
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_wp_logo" value="1" <?php  if(get_option('wp_backpack_wp_logo') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("kleines WordPress Logo in Admin Bar im Backend entfernen"); ?></span>
				</td>
		</tr>
		</table>
	<p class="submit1">
		<input type="submit" class="button-primary" value="Einstellungen speichern" />
	</p>
</form>
</div>