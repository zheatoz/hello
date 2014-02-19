 <?php 
/**
 * This is a WebbTemp pagecontroller.
 *
 */
// Include the essential config-file which also creates the $webbtemp variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the WebbTemp container.
$webbtemp['title'] = "Mattias Me-sida";

$webbtemp['header'] = <<<EOD
<img class='sitelogo' src='img/favicon.ico' alt='A logo"'/>
<span class='sitetitle'>Mattias Me-sida</span>
<span class='siteslogan'>Mer om mig</span>
EOD;

$webbtemp['main'] = <<<EOD
<h1>Hej!</h1>
<p>Mitt namn är Mattias Rosengren och är 24 år gammal. Jag bor i förorten till stockholm.</p>
<img class="right" src="img/me.jpg" width="300" height="300" alt="Bild på Mattias Rosengren">

<aside class="right"> 
    
 <p>Jag har dyslexi så mina texter kanske är lite konstigt skrivna då jag inte lägger ner så mycket tid och rättar det nu. 
 Det blir en liten snabb text om mig själv.
 <p>Jag har läst högskoleingenjör på kth tidigare inom elektroelektronik. Efter det har jag inte riktigt hittat
 något jobb inom det området utan jobbat lite smått med andra saker samtidigt jag läst distanskurser i olika ämnen, 
 mest mot programmerings hållet. Så nu tänkte jag att det skulle vara bra och lära sig programmera inom webb delen, 
 då det är ett område jag inte har så mycket kunskaper inom. Har läst lite webbdesign på gymnasiet och hållit på lite
 med php tidigare.
 <p>Jag har jobbat som väktare sen 2009 (behovs anställd), har även jobbat som it-konsult.
 <p>På fritiden sitter jag mycket vid datorn där jag spelar mycket spel och ser på film/serier. Blivit lite att man
 inte använder tvn något alls längre utan det endast är datorn man använder. Jag spelar även innebandy med vännerna
 på fritiden.
</aside>
EOD;

$webbtemp['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mattias Rosengren | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of WebbTemp.
include(WEBBTEMP_THEME_PATH);
