<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  Tab Einstellungen 4 -->
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- Plugin Install Links -->
<?php

$plugin_name_2 = 'jetpack';
$install_link_2 = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $plugin_name_2 . '&TB_iframe=true&width=772&height=772' ) ) . '" class="button thickbox" title="WordPress Plugin Jetpack">Jetpack installieren</a>';

$plugin_name_3 = 'wordpress-seo';
$install_link_3 = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $plugin_name_3 . '&TB_iframe=true&width=772&height=772' ) ) . '" class="button thickbox" title="WordPress Plugin Yoast SEO">Yoast SEO installieren</a>';

$plugin_name_4 = 'better-wp-security';
$install_link_4 = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $plugin_name_4 . '&TB_iframe=true&width=772&height=772' ) ) . '" class="button thickbox" title="WordPress Plugin iThemes Security">iThemes Security installieren</a>';

$plugin_name_5 = 'wp-optimize';
$install_link_5 = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $plugin_name_5 . '&TB_iframe=true&width=772&height=772' ) ) . '" class="button thickbox" title="WordPress Plugin WP-Optimize">WP-Optimize installieren</a>';

$plugin_name_6 = 'wysija-newsletters';
$install_link_6 = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $plugin_name_6 . '&TB_iframe=true&width=772&height=772' ) ) . '" class="button thickbox" title="WordPress Plugin MailPoet Newsletters">MailPoet Newsletters installieren</a>';

$plugin_name_7 = 'contact-form-7';
$install_link_7 = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $plugin_name_7 . '&TB_iframe=true&width=772&height=772' ) ) . '" class="button thickbox" title="WordPress Plugin Contact Form 7">Contact Form 7 installieren</a>';

$plugin_name_8 = 'ultimate-maintenance-mode';
$install_link_8 = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $plugin_name_8 . '&TB_iframe=true&width=772&height=772' ) ) . '" class="button thickbox" title="WordPress Plugin Ultimate Maintenance Mode">Ultimate Maintenance Mode installieren</a>';

$plugin_name_9 = 'duplicate-post';
$install_link_9 = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $plugin_name_9 . '&TB_iframe=true&width=772&height=772' ) ) . '" class="button thickbox" title="WordPress Plugin Duplicate Post">Duplicate Post installieren</a>';

?>

<div class="wrap">
	<div id="icon-options-general" class="icon32">
	<br>
</div>
<h2><?php echo '<img src="' . plugins_url( '/wp-backpack/pictures/menu_icon.png') . '"> ';?>WP Backpack</h2>
<div style="display:block; text-align:left; float:left;">von Christoph Kleinschmidt, Tel: 017623330719, Mail: <a href='mailto:mail@christophkleinschmidt.de' target='_blank'>mail@christophkleinschmidt.de</a>, Web: <a href='http://www.christophkleinschmidt.de' target='_blank'>www.christophkleinschmidt.de</a></div>
<div style="display:block; text-align:right;">WP Backpack Version 1.3.5</div>
<hr>
<h2 class="nav-tab-wrapper">
	<a href="/wp-admin/admin.php?page=allgemein" class="nav-tab">Allgemein</a>
    <a href="/wp-admin/admin.php?page=einstellungen1" class="nav-tab">Aussehen</a>
	<a href="/wp-admin/admin.php?page=einstellungen2" class="nav-tab">Technik</a>
	<a href="/wp-admin/admin.php?page=einstellungen3" class="nav-tab">Ähnliche Beiträge</a>
	<a href="/wp-admin/admin.php?page=einstellungen4" class="nav-tab nav-tab-active">WP Plugin Tipps</a>
</h2>	
<h3 style="font-style:italic;">
	Auf dieser Seite finden Sie aktuelle WordPress Plugin Tipps zur Nutzung in Ihrer WordPress Installation.
	Hilfe finden Sie in dieser <a href='http://www.christophkleinschmidt.de/wordpress-plugin-wp-backpack-dokumentation' target='_blank'>Dokumentation</a>.<br>
	</h3>
<?php settings_fields('wp_backpack_group4'); ?>
	<table class="form-table">
		<tr valign="top">
			<th scope="row">
				Jetpack
			</th>
			<td>
				<?php echo $install_link_2; ?>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Yoast SEO
			</th>
			<td>
				<?php echo $install_link_3; ?>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				iThemes Security
			</th>
			<td>
				<?php echo $install_link_4; ?>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				WP-Optimize
			</th>
			<td>
				<?php echo $install_link_5; ?>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				MailPoet Newsletters
			</th>
			<td>
				<?php echo $install_link_6; ?>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Contact Form 7
			</th>
			<td>
				<?php echo $install_link_7; ?>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Ultimate Maintenance Mode
			</th>
			<td>
				<?php echo $install_link_8; ?>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Duplicate Post
			</th>
			<td>
				<?php echo $install_link_9; ?>
			</td>
		</tr>
	</table>
</div>