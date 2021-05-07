<?php 

/*
Plugin Name: Go Login
Plugin URI: https://github.com/jorgepenela/gologin
Description: Redirecciona a los usuarios no logueados a la pagina de Login. 
Version: 1.0
Author: Jorge Penela
Author URI: https://github.com/jorgepenela
License: GPL2
*/



defined('ABSPATH') or die("Bye bye");

$site_url = network_site_url( '/' );
// redireccionar a los usuarios no logueados
function jp_goLogin(){
	if (!is_user_logged_in()) {

		if ( $GLOBALS['pagenow'] !== 'wp-login.php' ) {
		    // We're on the login page!
		    wp_redirect( '/wp-login.php');

		    exit;

		    }
		}	
		
}

add_action('init', 'jp_goLogin');