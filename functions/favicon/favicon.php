<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Standard Favicon im Backend anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function admin_favicon() {
echo '<link href="' . plugins_url( '/wp-backpack/pictures/favicon.ico', dirname(__FILE__) ) . '" rel="icon" type="image/x-icon">';
}
add_action('admin_head', 'admin_favicon');

?>