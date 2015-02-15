<?php 
/**
 * This is a Simplate pagecontroller.
 *
 */
// Include the essential config-file which also creates the $simplate variable with its defaults.
include(__DIR__.'/config.php'); 

// Add style for csource
$simplate['stylesheets'][] = 'css/source.css';

// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));

// Do it and store it all in variables in the Simplate container.
$simplate['title'] = "Visa k�llkod";
$simplate['main'] = "<h1>Visa k�llkod</h1>\n" . $source->View();

// Finally, leave it all to the rendering phase of Simplate.
include(SIMPLATE_THEME_PATH);
