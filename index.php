<?php

/*
 	Plugin Name: Safe Replace
	Plugin URI: https://github.com/andrewspear
	Description: Safely search and replace shortcodes and post content. You can undo changes if required.
	Author: Andrew Spear (original code by Benjamin Sommer)
	Version: 3.0.0
	Author URI: https://spe.ar.com
	License: CC GNU GPL 2.0 license
	Text Domain: ssr
	Coding standard: http://framework.zend.com/manual/en/coding-standard.html
*/

// Initialize Plugin and declare API
require 'Ssr.php';
Ssr::init();
Ssr::loadClass('Ssr_Plugin');
register_activation_hook(__FILE__, 'Ssr_Plugin::activate');
register_deactivation_hook(__FILE__, 'Ssr_Plugin::deactivate');
register_uninstall_hook(__FILE__, 'Ssr_Plugin::uninstall');