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

function event_manager_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: none!important;
			height:65px;
			width:320px;
			background-size: 320px 65px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'event_manager_logo' );
