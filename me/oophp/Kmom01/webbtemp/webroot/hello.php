<?php 
/**
 * This is a WebbTemp pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the WebbTemp container.
$webbtemp['title'] = "Hello World";
 
$webbtemp['header'] = <<<EOD
<img class='sitelogo' src='img/anax.png' alt='WebbTemp Logo'/>
<span class='sitetitle'>WebbTemp webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$webbtemp['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur WebbTemp ser ut och fungerar.</p>
EOD;
 
$webbtemp['footer'] = <<<EOD
<footer><span class='sitefooter'>
Copyright (c) Mattias Rosengren (Mattias.Rosengren@live.com) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Anax.
include(WEBBTEMP_THEME_PATH);
