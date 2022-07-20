<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              #
 * @since             1.0.0
 * @package           Test_git
 *
 * @wordpress-plugin
 * Plugin Name:       Test Git
 * Plugin URI:        #
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           2.0.0
 * Author:            #
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       test_git
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/yamenshahin/git-test
 * Primary Branch: main
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TEST_GIT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-test_git-activator.php
 */
function activate_test_git() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-test_git-activator.php';
	Test_git_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-test_git-deactivator.php
 */
function deactivate_test_git() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-test_git-deactivator.php';
	Test_git_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_test_git' );
register_deactivation_hook( __FILE__, 'deactivate_test_git' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-test_git.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_test_git() {

	$plugin = new Test_git();
	$plugin->run();

}
run_test_git();
