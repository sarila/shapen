<?php

/**
 * Functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Shapen
 */
  // Setup
   define('SHAPEN_DEV_MODE', true);

   // Includes
   include (get_theme_file_path('/front/enqueue.php'));


   // Hooks
    add_action('wp_enqueue_scripts', 'shapen_enqueue_scripts');
