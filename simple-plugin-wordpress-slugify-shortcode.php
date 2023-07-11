<?php

/**
 * Simple Slugify Generator Shortcode
 *
 *
 * @wordpress-plugin
 * Plugin Name: Slugify Generator
 * Plugin URI:  https://github.com/tubaguskencana/simple-plugin-wordpress-slugify-shortcode
 * Description: This plugin to generate slug from user input
 * Version:     1.0.0
 * Author:      Tubagus Putra Kencana
 * Author URI:  https://www.linkedin.com/in/tubagus-putra-kencana/
 * Text Domain: slugify-generator
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

 function slugify_generator() {
    ob_start();
    include( 'slugify-file.html' ); 
    return ob_get_clean();
}
add_shortcode( 'form_slugify', 'slugify_generator' );