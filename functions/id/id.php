<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# IDs von Beiträgen und Seiten im Backend anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    add_filter('manage_posts_columns', 'wp_backend_id', 5);
    add_action('manage_posts_custom_column', 'wp_backend_id_columns', 5, 2);
    add_filter('manage_pages_columns', 'wp_backend_id', 5);
    add_action('manage_pages_custom_column', 'wp_backend_id_columns', 5, 2);

function wp_backend_id($defaults){
    $defaults['wps_post_id'] = __('ID');
    return $defaults;
}
function wp_backend_id_columns($column_name, $id){
        if($column_name === 'wps_post_id'){
                echo $id;
    }
}

# Breite der ID Spalte
add_action('admin_head', 'wp_backend_admin_styling');
function wp_backend_admin_styling() {
echo '<style type="text/css">';
echo 'th#wps_post_id{width:30px;}';
echo '</style>';
}

?>