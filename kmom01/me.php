<?php 
/**
 * This is a Simplate pagecontroller.
 *
 */
// Include the 'super-level' config file. It instantiates the $simplate variable with its defaults.
include(__DIR__.'/config.php'); 


// Define what to include to make the plugin work
$simplate['stylesheets'][]        = 'css/slideshow.css';
$simplate['jquery']               = true;
$simplate['javascript_include'][] = 'js/slideshow.js';


// Define and set values for the main Simplate container.
$simplate['title'] = "Om mig";

$simplate['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["one_c.jpg", "two_c.jpg", "three_c.jpg", "four_c.jpg"]'>
<img src='img/me/one_c.jpg' width='700' height='150' alt='Cykling'/>
</div>

<article class="readable">
<h1>Om mig</h1>
<p>Jag heter Björn Sundström och arbetar med översättning av programvara på
   ett företag som heter Open Text. Rättare sagt: jag ser till att våra program fungerar
   i andra länder och på/med andra språk. Själva översättningarna köper jag, utom när målspråket är svenska.</p>
<p>För något år sedan fick jag för mig att jag borde göra klart min examen från
   systemvetenskaplig linje, men kursen som fattas kändes inaktuell så istället började
   jag modernisera mig: Java, C#, Perl, Python, Objective-C, och nu app- och webbprogrammering.</p>
<p>I övrigt har jag väldigt många fina cyklar som jag mekar med och cyklar på - ett bra alternativ
   till alla timmar vid tangentbordet.</p>

<p>Jag finns även här: <a href="http://plus.google.com/+BjornSundstrom">Google+</a>, <a href="http://se.linkedin.com/in/bjornsundstrom">LinkedIn</a>, <a href="http://www.facebook.com/sunkasundstrom">Facebook</a>, <a href="http://www.flickr.com/photos/sunka">Flickr</a>,  <a href="http://github.com/bjornsundstrom">GitHub</a> och <a href="http://twitter.com/BjornPSundstrom">Twitter</a>.

{$simplate['byline']}

</article>

EOD;


// Render everything with Simplate.
include(SIMPLATE_THEME_PATH);