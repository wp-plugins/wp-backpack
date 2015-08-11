<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  Tab Einstellungen 3 -->
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<div class="wrap">
	<div id="icon-options-general" class="icon32">
	<br>
</div>
<h2><?php echo '<img src="' . plugins_url( '/wp-backpack/pictures/menu_icon.png') . '"> ';?>WP Backpack</h2>
<div style="display:block; text-align:left; float:left;">von Christoph Kleinschmidt, Tel: 017623330719, Mail: <a href='mailto:mail@christophkleinschmidt.de' target='_blank'>mail@christophkleinschmidt.de</a>, Web: <a href='http://www.christophkleinschmidt.de' target='_blank'>www.christophkleinschmidt.de</a></div>
<div style="display:block; text-align:right;">WP Backpack Version 1.3.2</div>
<hr>
<h2 class="nav-tab-wrapper">
	<a href="/wp-admin/admin.php?page=allgemein" class="nav-tab">Allgemein</a>
    <a href="/wp-admin/admin.php?page=einstellungen1" class="nav-tab">Aussehen</a>
	<a href="/wp-admin/admin.php?page=einstellungen2" class="nav-tab">Technik</a>
	<a href="/wp-admin/admin.php?page=einstellungen3" class="nav-tab nav-tab-active">Ähnliche Beiträge</a>
</h2>	
<h3 style="font-style:italic;">
	Bitte Aktivieren oder Deaktivieren Sie Ihre Einstellungen und speichern Sie diese anschließend.
	Hilfe finden Sie in dieser <a href='http://www.christophkleinschmidt.de/wordpress-plugin-wp-backpack-dokumentation' target='_blank'>Dokumentation</a>.<br>
	Für die Nutzung dieser Funktionen wird das kostenfreie WordPress-Plugin <a href='https://wordpress.org/plugins/jetpack/' target='_blank'>Jetpack</a> mit der aktivierten Funktion <a href='http://jetpack.me/support/related-posts/' target='_blank'>Related Posts</a> benötigt.<br>
	<br>
	<a href="https://downloads.wordpress.org/plugin/jetpack.3.6.1.zip" class="button">Jetpack herunterladen</a>
</h3>
<form method="post" action="options.php">
<?php settings_fields('wp_backpack_group3'); ?>
	<table class="form-table">
		<tr valign="top">
			<th scope="row">
				Anzahl der Ähnlichen Beiträgen unter einem Artikel
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_related_posts_anzahl" value="1" <?php  if(get_option('wp_backpack_related_posts_anzahl') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("die Anzahl der Ähnlichen Beiträgen unter einem Artikel bestimmen (benötigt Jetpack Modul Ähnliche Beiträge)"); ?><br>
					<br>
					Bitte geben Sie hier die gewünschte Anzahl der Ähnlichen Beiträgen unter einem Artikel an: <input type="text" name="wp_backpack_related_posts_anzahl_number"	value="<?php echo get_option('wp_backpack_related_posts_anzahl_number'); ?>" /> z. Bsp. 9<br>	   
				</span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				eigene Beitragstypen in Ähnlichen Beiträgen
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_related_posts_anzeige"	value="1" <?php  if(get_option('wp_backpack_related_posts_anzeige') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("eigene Beitragstypen in Ähnlichen Beiträgen anzeigen lassen (benötigt Jetpack Modul Ähnliche Beiträge)"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Ähnlichen Beiträge Kategorien
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_related_posts_kategorie" value="1" <?php  if(get_option('wp_backpack_related_posts_kategorie') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("bestimmte Kategorien aus den Ähnlichen Beiträgen entfernen (benötigt Jetpack Modul Ähnliche Beiträge)"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Ähnlichen Beiträge Seiten
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_related_posts_seiten" value="1" <?php  if(get_option('wp_backpack_related_posts_seiten') == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Ähnlichen Beiträge auf bestimmten Seiten nicht anzeigen (benötigt Jetpack Modul Ähnliche Beiträge)"); ?></span>
				</td>
		</tr>
		</table>
	<p class="submit">
		<input type="submit" class="button-primary" value="Einstellungen speichern" />
	</p>
</form>
</div>