<?php
/**
Plugin Name: Editor Stylify
Plugin URI: https://github.com/renegade47/wp-editor-stylify
Description: This plugin adds a custom editor stylesheet for the WordPress Editor
Author: Leo Ruther Valles
Version: 1
Author URI: http://leoruthervalles.lineage-developers.com
*/


function register_editor_stylesheet() {
    add_editor_style( 'css/es_customeditor.css' );
}
add_action( 'admin_init', 'register_editor_stylesheet' );


?>