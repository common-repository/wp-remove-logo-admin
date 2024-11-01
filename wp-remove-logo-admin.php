<?php
/*
Plugin Name: WP Remove Logo Admin
Plugin URI: http://www.superjogosclick.com/?ref-plugins-wp
Description: Com um clique remove o logo do Wordpress de seu painel.
Author: Equipe SJC
Version: 1.3
Author URI: http://www.superjogosclick.com/?ref-plugins-wp
License: GPL2
*/
 
function abwlmr_remove_wp_logo() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');
}
add_action( 'wp_before_admin_bar_render', 'abwlmr_remove_wp_logo' );
?>