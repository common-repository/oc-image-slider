<?php
/**
 * Plugin Name: OC Image Slider
 * Plugin URI: https://oc-soft.net/en/oc-image-slider/
 * Description: You can create a image slider region with block editor.
 * Author: Toshiyuki Ogawa
 * Version: 0.1.1
 * Licence: GPL v2 or lator
 * Licence URL: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 * Requires at least: 5.0 
 * Requires PHP: 5.4
 */

require_once implode('/', [
    plugin_dir_path( __FILE__), 'lib', 'oc-image-slider.php']);
/**
 * activate plugin
 */
function oc_image_slider_activate() {

    OcImageSlider::$instance->activate();
}

/**
 * deactivate plugin
 */
function oc_image_slider_deactivate() {
    OcImageSlider::$instance->deactivate();
}



register_activation_hook(__FILE__, 'oc_image_slider_activate');
register_deactivation_hook(__FILE__, 'oc_image_slider_deactivate');
OcImageSlider::$instance->run(
    implode('', [plugin_dir_url(__FILE__), 'js']),
    implode('', [plugin_dir_url(__FILE__), 'css']),
    plugin_dir_path(__FILE__),
    plugin_dir_path(__FILE__),
    plugin_dir_url(__FILE__));


// vi: se ts=4 sw=4 et:
