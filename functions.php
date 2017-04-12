<?php
/**
 * Event Manager functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Event_Manager
 */

function event_manager_menus() {
	register_nav_menu('primary',__( 'Primary Menu' ));
}
add_action( 'init', 'event_manager_menus' );
