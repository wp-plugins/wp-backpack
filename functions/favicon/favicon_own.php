<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# eigenes Favicon im Backend anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function admin_favicon_own() {
echo '<link href="' . get_option("wp_backpack_input_favicon_own") . '" rel="icon" type="image/x-icon">';
}
add_action('admin_head', 'admin_favicon_own');

?>