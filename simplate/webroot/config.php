<?php
/**
 * Config-file for Simplate. Change settings here to affect installation.
 * Heavily inspired by the work of Mikael Roos - thank you!
 */
 
/**
 * Set the error reporting level.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
/**
 * Define Simplate paths.
 *
 */
define('SIMPLATE_INSTALL_PATH', __DIR__ . '/..');
define('SIMPLATE_THEME_PATH', SIMPLATE_INSTALL_PATH . '/theme/render.php');
 
/**
 * Include bootstrapping functions.
 *
 */
include(SIMPLATE_INSTALL_PATH . '/src/bootstrap.php');

/**
 * Start the session.
 *
 */
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();
  
/**
 * Create the Simplate variable.
 *
 */
$simplate = array();
 
/**
 * Site wide settings.
 *
 */
$simplate['lang'] = 'sv';
$simplate['title_append'] = ' | Simplate - en enkel mall för webbsidor och sajter';
$simplate['header'] = <<<EOD
<img class='sitelogo' src='img/simplate.png' alt='Simplate logo'/>
<span class='sitetitle'>Simplate</span>
<span class='siteslogan'>Mallramverk för PHP-baserade webbsajter</span>
EOD;

$simplate['footer'] = <<<EOD
<footer>
<span class='sitefooter'>Copyright (c) Björn Sundström (bjorn.sundstrom@gmail.com) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a>
</span>
</footer>
EOD;

/**
 * Theme related settings.
 *
 */
$simplate['stylesheets'] = array('css/style.css');
$simplate['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$simplate['modernizr'] = 'js/modernizr.js';
$simplate['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js';
//$simplate['jquery'] = null; // To disable jQuery
$simplate['javascript_include'] = array();
//$simplate['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
 * Settings for Google Analytics.
 *
 */
$simplate['google_analytics'] = 'null'; // Set to null to disable google analytics


