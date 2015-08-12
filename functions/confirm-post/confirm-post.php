<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Bestätigungsmeldung vor der Veröffentlichung eines Beitrages
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

$wp_backpack_confirm_message = "Wollen Sie diesen Beitrag wirklich veröffentlichen?"; 

function wp_backpack_confirm() {

global $wp_backpack_confirm_message;
echo '<script type="text/javascript"><!--
var publish = document.getElementById("publish");
if (publish !== null) publish.onclick = function(){
	return confirm("'.$wp_backpack_confirm_message.'");
};
// --></script>';
}
add_action('admin_footer', 'wp_backpack_confirm');
?>
