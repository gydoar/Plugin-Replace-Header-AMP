<?php

/**
 * Plugin Name:       Replace Header AMP
 * Plugin URI:        https://andrevega.com/
 * Description:       This plugin helps to add a custom Header with menu for the AMP Legacy theme in the template mode Reader for AMP plugin WordPress
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Andrés Vega
 * Author URI:        https://andrevega.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://andrevega.com/
 * Text Domain:       replace-header-amp
 * Domain Path:       /languages
 */

define('HEADER_AMP', plugin_dir_path((__FILE__)));
require_once HEADER_AMP . '/public/header-amp.php';
