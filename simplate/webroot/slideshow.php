<?php 
/**
 * This is a Simplate pagecontroller.
 *
 */
// Include the essential config-file which also creates the $simplate variable with its defaults.
include(__DIR__.'/config.php');

// Define what to include to make the plugin to work
$simplate['stylesheets'][]        = 'css/slideshow.css';
$simplate['javascript_include'][] = 'js/slideshow.js';

// Do it and store it all in variables in the Simplate container.
$simplate['title'] = "Slideshow för att testa JavaScript i Simplate";

$simplate['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["one.png", "two.png", "three.png", "four.png"]'>
<img src='img/me/one.png' width='950px' height='180px' alt='Me'/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur Simplate fungerar tillsammans med JavaScript.</p>
EOD;

// Finally, leave it all to the rendering phase of Simplate.
include(SIMPLATE_THEME_PATH);
