<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  Tab Einstellungen 2 -->
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
    <a href="/wp-admin/admin.php?page=einstellungen1" class="nav-tab">Aussehen</a>
	<a href="/wp-admin/admin.php?page=einstellungen2" class="nav-tab nav-tab-active">Technik</a>
	<a href="/wp-admin/admin.php?page=einstellungen3" class="nav-tab">Ähnliche Beiträge</a>
	<a href="/wp-admin/admin.php?page=einstellungen4" class="nav-tab">WP Plugin Tipps</a>
</h2>	
<h3 style="font-style:italic;">
	Bitte Aktivieren oder Deaktivieren Sie Ihre Einstellungen und speichern Sie diese anschließend.
	Hilfe finden Sie in dieser <a href='http://www.christophkleinschmidt.de/wordpress-plugin-wp-backpack-dokumentation' target='_blank'>Dokumentation</a>.
</h3>	
<form method="post" action="options.php">
<?php settings_fields('wp_backpack_group2'); ?>
	<table class="form-table">
		<tr valign="top">
			<th scope="row">
				Bestätigungsmeldung Beitrag
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_confirm" value="1" <?php  if(get_option('wp_backpack_confirm') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("zeigt eine Bestätigungsabfrage vor der Veröffentlichung eines Beitrages"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				RSS Feed
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_rss" value="1" <?php  if(get_option('wp_backpack_rss') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("RSS Feed mit Thumbnail für RSS-Plattformen (feedly, etc.) verteilen"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				WordPress-Shortlink
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_shortlink"	value="1" <?php  if(get_option('wp_backpack_shortlink') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("alle WordPress-Shortlink-Anfragen werden voll aufgelöst - kein Umwandlung in Shortlink wp.link"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Update-Nachricht
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_update_nachricht" value="1" <?php  if(get_option('wp_backpack_update_nachricht') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Update-Nachricht bei allen Benutzern ausser dem Administrator ausblenden"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Speichernutzung
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_speichernutzung" value="1" <?php  if(get_option('wp_backpack_speichernutzung') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Speichernutzung des Blogs im Dashboard und im Backend Footer anzeigen"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Blog-Beiträge Shortcode
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_letzte_beitraege" value="1" <?php  if(get_option('wp_backpack_letzte_beitraege') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("letzte Blog-Beiträge mit Shortcode an gewünschter Stelle anzeigen"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Installation ohne Passwort
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_password" value="1" <?php  if(get_option('wp_backpack_password') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Plugins, Themes, etc. ohne Passwort installieren"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Website Rankings
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_ranking" value="1" <?php  if(get_option('wp_backpack_ranking') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Anzeige der wichtigsten Website Rankings im Dashboard<br><br>Zur Anzeige des Website Rankings im Dashboard muss die eigene Website (Bsp.: example.com) einmalig auf der Website <a href='http://www.webpageanalyse.com/' target='_blank'>WebPageAnalyse</a> eingetragen werden.<br>
					Nutzen Sie hierzu bitte das unten eingebettete Formularfeld oder <a href='http://www.webpageanalyse.com/pagerank' target='_blank'>diesen Link</a> zum eintragen."); ?></span>
				<br>
				<br>
				<div style="width:317px; height:50px; overflow:hidden; position:relative;">
				<iframe style="position:absolute; top:-120px; left:-270px; width:1280px; height:1200px;" src="http://www.webpageanalyse.com/pagerank" scrolling="no"></iframe>
				</div>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Eigene Shortcodes
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_shortcodes" value="1" <?php  if(get_option('wp_backpack_shortcodes') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Mit dieser Funktion können eigene Shortcodes festegelegt und verwendet werden."); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in diesen Feldern den jeweiligen gewünschten Shortcode-Inhalt ein:"); ?>
					<br>
					[shortcode1]: <input type="text" name="wp_backpack_input_shortcode_own1"	value="<?php echo get_option('wp_backpack_input_shortcode_own1'); ?>" /> z. Bsp. Dies ist ein Beispiel.
					<br>
					[shortcode2]: <input type="text" name="wp_backpack_input_shortcode_own2"	value="<?php echo get_option('wp_backpack_input_shortcode_own2'); ?>" /> z. Bsp. Dies ist ein Beispiel.
					<br>
					[shortcode3]: <input type="text" name="wp_backpack_input_shortcode_own3"	value="<?php echo get_option('wp_backpack_input_shortcode_own3'); ?>" /> z. Bsp. Dies ist ein Beispiel.
					<br>
					[shortcode4]: <input type="text" name="wp_backpack_input_shortcode_own4"	value="<?php echo get_option('wp_backpack_input_shortcode_own4'); ?>" /> z. Bsp. Dies ist ein Beispiel.
					<br>
					[shortcode5]: <input type="text" name="wp_backpack_input_shortcode_own5"	value="<?php echo get_option('wp_backpack_input_shortcode_own5'); ?>" /> z. Bsp. Dies ist ein Beispiel.
				    </span>
				</td>
		</tr>
		</table>
	<p class="submit">
		<input type="submit" class="button-primary" value="Einstellungen speichern" />
	</p>
</form>
</div>