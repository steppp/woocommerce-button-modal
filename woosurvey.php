<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @package           Woo_Merda
 *
 * @wordpress-plugin
 * Plugin Name:       WooMerda
 * Plugin URI:        dlsajnd
 * Description:       Una cagata pazzesca
 * Version:           1.0.0
 * Author:            me
 * Author URI:        das
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-demo
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

define('WP_DEBUG', true);

function addButtonAfterAddToCartButton() {
?>
<button type="button" id="srand-btn-start-survey"
    class="single_add_to_cart_button button alt">
	Start survey
</button>
<?php
}

function addSurveyForm() {
?>
<div id="srand-div-survey-modal" class="srand-modal">
    <form>
        Ciao
    </form>
</div>
<?php
}

function enqueueCustomScripts() {
    $plugin_url = plugin_dir_url(__FILE__);
    wp_enqueue_style('custom-theme', $plugin_url . '/css/custom.css', false);
    wp_enqueue_script('my-script', $plugin_url . '/js/myscript.js', false);
}

/**
 * Check if WooCommerce is active
 **/
if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    exit;
}

add_action('woocommerce_after_single_product', 'addSurveyForm', 1000, 0);
add_action('woocommerce_after_add_to_cart_button', 'addButtonAfterAddToCartButton', 1000, 0);
add_action('wp_enqueue_scripts', 'enqueueCustomScripts', 1000, 0);

