<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Menüpunkte und Begriffe seitenweit umbenennen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

add_filter('gettext','change_names');
add_filter('ngettext','change_names');
function change_names( $translated ) {
	$translated = str_ireplace(
	# An dieser Stelle werden die Änderungen vorgenommen
		# array('zu ersetzendes Wort 1','zu ersetzendes Wort 2','zu ersetzendes Wort 3');
		# array('ersetzendes Wort 1','ersetzendes Wort 2','ersetzendes Wort 3');
		array('Dashboard','Einstellungen'), 
		array('Übersicht','Settings'), 
		$translated);
return $translated;
}

?>