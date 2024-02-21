<?php
 /*
 * Plugin Name:       MagiPress - Destroy Projects
 * Plugin URI:        https://curva.studio
 * Description:       WARNING!: It will delete the MagiPress Bulk Post database table when the activate plugin button is pressed. After this plugin is activated, please deactivate and re-activate the Magipress plugin so that the system creates a new Magipress Bulk Post database table. After that, please delete the "Magipress destroy projects" plugin.
 * Version:           0.1.0
 * Author:            Curva Team
 * Author URI:        https://curva.studio
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       magipress
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function activate_magipress_destroy_projects() {

	global $wpdb;

	$table_name_2 = $wpdb->prefix . 'mp_bulk_post_item';
    $wpdb->query( "DROP TABLE IF EXISTS $table_name_2" );

    $table_name_1 = $wpdb->prefix . 'mp_bulk_post';
    $wpdb->query( "DROP TABLE IF EXISTS $table_name_1" );

}

register_activation_hook( __FILE__, 'activate_magipress_destroy_projects' );