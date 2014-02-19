 <?php 
/**
 * This is a WebbTemp pagecontroller.
 *
 */
// Include the essential config-file which also creates the $webbtemp variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the WebbTemp container.
$webbtemp['title'] = "Redovisning";

$webbtemp['header'] = <<<EOD
<img class='background' src='img/banner3.jpg' alt='A logo"'/>
<span class='sitetitle'>Redovisning av oophp</span>
<span class='siteslogan'>Här beskriver jag hur jag löst uppgiften</span>
EOD;

$webbtemp['main'] = <<<EOD
<h1>REDOVISNING AV KURSMOMENTEN</h1>
<h2>Kmom01: En boilerplate </h2>

 <p>
Uppgiften var riktigt enkel, efter jag "sovit" på saken, först undrade jag hur jag skulle få allt och fungera och det verka vara hur svårt som helst, men sen kom jag ihåg 
hur vi löste uppgifterna i oophp kursen med hjälp av "index.tpl.php" så jag tog helt enkel och kopiera in allt från oophp delen, ändrade "index.tpl.php" så den såg ut som
index vi fick med och därefter gjorde om det så den klara av och hantera php som vi gjort tidigare. design och allt hade jag klar sen tidigare även om det blev lite klurigt
och få in all information på rätt ställen och se till man inte glömt vissa delar osv. men efter lite jobb så fick jag det fungera över förväntan, när jag tyckte problemet
var så svårt från början visade det vara så enkelt, tror detta delmoment har varit det lättaste hittils (har säkert missat något eftersom jag tycker det, skulle inte bli
förvånad i såna fall)
<p>
Jag använder mig av Notepad++ (som i alla tidigare kurser). Men antar det har och göra med man känner sig bekväm med det och eftersom det bara är och skriva koden så går
det helt okej. vore trevligt med lite hjälp ibland.
<p>
Jag tyckte boiler-konceptet var intressant eftersom dom tänkt på så mycket avancerade saker jag aldrig skulle tänka över, dock vet jag inte hur mycket sånt jag har med nu
eftersom det är lite för avancerat för mig, antar det är sånt man kommer förstå bättre med tiden. Jag gick igenom filmen och det gav mig en helt bättre syn av det hela
då han går igenom alla saker han har tänk på som jag aldrig skulle tänka på. Sen gäller det väll att använda hans saker, vet inte riktigt hur bra jag gör det. men borde göra
det eftersom jag använder hans html sida som grund i mina php sidor. Men som sagt så vet jag inte riktigt hur jag testar det hela.
<p>
Då jag gjorde uppgiften från min egna hostning från datorn upptäckte jag inte felet om redirect i .htaccess, men efter kollat forumet så hitta jag vad felet var, höll på bli
tokig även om jag misstänkte -htaccess filen. men eftersom felet var kvar när jag tog bort filen så började jag misstänka annat.. antar det har och göra med att jag inte
rensade minnet när jag bara ladda om sidan, så all data från .ht filen fanns kvar. Det var bra att det stog på hemsidan så man kunde hitta felet utan att felsöka varenda 
fil i mappen. jobbigaste är när man inte får något felmeddelande (räknar inte "sidan finns ej" som fel meddelande) men såg sen att adressen ändrades (tog bort www.) 
vilket var vad som var felet. Nackdelen med göra allt lokalt och glömma bort testa på servern.
 <p> 

</aside>
EOD;

$webbtemp['footer'] = <<<EOD
<div id="footer">
<footer class="byline"> Copyright (c) Mattias Rosengren </footer>
<footer class="bottom"> 
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a>
 </footer>
</div>
EOD;


// Finally, leave it all to the rendering phase of WebbTemp.
include(WEBBTEMP_THEME_PATH);
