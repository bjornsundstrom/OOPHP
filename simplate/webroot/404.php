<?php 
/**
 * This is a Simplate pagecontroller.
 *
 */
// Include the essential config-file which also creates the $simplate variable with its defaults.
include(__DIR__.'/config.php'); 
 
// Do it and store it all in variables in the Simplate container.
$simplate['title'] = "404";
$simplate['header'] = "";
$simplate['main'] = "This is a Simplate 404. Document is not here.";
$simplate['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
// Finally, leave it all to the rendering phase of Simplate.
include(SIMPLATE_THEME_PATH);
