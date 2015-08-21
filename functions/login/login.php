<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Login Screen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Logo und Hintergrund
function ck_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo plugin_dir_url(); ?>wp-backpack/pictures/logo_blau.png) !important;
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
echo "Konzeption und Erstellung des Internetauftritts:".'<br><br>';
echo '<img width="350" src="http://www.christophkleinschmidt.de/wp-content/uploads/2015/06/Logo-mit-Schriftzug-blau.png" alt="Christoph Kleinschmidt">'.'<br>';
echo "Christoph Kleinschmidt".'<br>';
echo "Tel: 017623330719".'<br>';
echo "Mail: <a href='mailto=mail@christophkleinschmidt.de'>mail@christophkleinschmidt.de</a>".'<br>';
echo "Web: <a href='http://www.christophkleinschmidt.de' target='_blank'>www.christophkleinschmidt.de</a>";
echo '</div>';
}
add_action( 'login_footer', 'ck_login_footer' );

?>