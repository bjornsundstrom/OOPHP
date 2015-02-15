<?php 
/**
 * This is a Simplate pagecontroller.
 *
 */
// Include the 'super-level' config file. It instantiates the $simplate variable with its defaults.
include(__DIR__.'/config.php'); 


// Define and set values for the main Simplate container.
$simplate['title'] = "Redovisning";

$simplate['main'] = <<<EOD
<article class="readable">
<h1>Redovisning av kursmomenten</h1>

<h2>Kmom01: Kom igång med Objektorienterad PHP</h2>

<p>
Oj. Det här var ett rejält kursmoment. Det fick ta den tid som behövdes; bäst att förstå det ordentligt.
PHP-delen var ungefär lika komplicerad som det jag gjort i förra kursen (htmlphp), men det Anax-liknande ramverket var
besvärligare. Nu tror jag att det mesta är på plats och går att bygga vidare på.
</p>
<p>
Jag använder XAMPP på Windows, vilket för den här övningen i praktiken innebär Apache. Firefox är huvudsaklig browser
för sidvalidering och felsökning med Firebug, oftast renderar jag sidorna i Firefox och inspekterar HTML-element och 
JavaScript i Chrome samtidigt. Verktygen i Chrome är i stort sett lika bra som Firebug.
</p>
<p>
PHP-guiden har jag gått igenom tidigare, men det var milt uttryckt nyttig repetition. Den har dessutom uppdaterats en 
del sedan sist. Mycket bra sammanfattning av och inledning till PHP.
</p>
<p>
Min Anax-kopia (ja, den är i stort sett en kopia...) heter Simplate. Jag har behållit strukturen och arbetssättet
från Anax. Den känns stabil och utbyggbar. Jag har återanvänt en del av mina style sheets from htmlphp-kursen och tänker
implementera resten längre fram i kursen. Jag satt alldeles för länge med det nu så jag lägger det åt sidan en stund.
Simplate-ramverket tillsammans med genomtänkta stylesheets och ett hyfsta funktionsbibliotek bör räcka långt.
</p>
<p>
När det gäller source.php har jag använt samma implementation som i Anax, men erkänner villigt att jag 
inte hade kunna skriva CSource-klassen själv. Min gamla source.php från tidigare kurs ger samma funktion,
men då försvinner lite av poängen med ett ramverk.
</p>
<p>
Jag har börjat använda GitHub men väntar lite med att lägga kursmomenten där - vill tänka igenom 
repository-strukturen först.
</p>

{$simplate['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of Anax.
include(SIMPLATE_THEME_PATH);
