<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# eigener Login Screen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Logo und Hintergrund
function ck_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_option('wp_backpack_login_own_input1'); ?>);
            padding-bottom: 30px;
        }
        .login {
	      	background-color: #ffffff;
 			background-size: 100%;
 			background-attachment: fixed;
    	}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'ck_login_logo' );

# Link des Logos
function ck_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'ck_login_logo_url' );

# Titel des Logos
function ck_login_logo_url_title() {
    return 'Christoph Kleinschmidt';
}
add_filter( 'login_headertitle', 'ck_login_logo_url_title' );

# Login Header
function ck_login_header() {
echo '<div style="text-align:center; margin:-50px 0px 15px 0px; padding:0px 0px 0px 0px; line-height:25px; font-size:20px;">';
echo 'Willkommen bei'.'<br>';
echo get_bloginfo('name');
echo '</div>';
}
add_action( 'login_message', 'ck_login_header' );

# Login Footer
function ck_login_footer() {
echo '<div style="text-align:center; margin:15px 0px 0px 0px;padding: 50px 0px 10px 0px; line-height:20px;">';
echo get_option('wp_backpack_login_own_input2');
echo '<br>';
echo get_option('wp_backpack_login_own_input3');
echo '<br>';
echo get_option('wp_backpack_login_own_input4');
echo '<br>';
echo get_option('wp_backpack_login_own_input5');	
echo '<br>';
echo get_option('wp_backpack_login_own_input6');	
echo '<br>';
echo get_option('wp_backpack_login_own_input7');	
echo '</div>';
}
add_action( 'login_footer', 'ck_login_footer' );

?>