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
<h2>Kmom01: Kom igång med programmering i PHP</h2>

 <p> 
	Det var riktigt svårt och hänga med i början. då hela filsystemet är så mycket annorlunda än htmlphp (del1-2) är. Men mot slutet av momenten började det klana upp
	en hel del mer. men man fick lägga ner mycket tid på att försöka förstå, och vissa delar förstog jag inte utan kom fram till att det var bättre och köra klart 
	alla uppgifter innan jag ens försökte lära mig vad som hände. finns säkert vissa mindre delar jag inte kan helt fortvarande men det kommer väll när man fortsätter med
	kursmomenten. Desto mer tid man lägger ner desto bättre går det ju.
	 <p> 
	Jag är nöjd med desingen, och fått till en banner. visst det är inte helt perfeckt men jag tycker det blev helt okej. förhoppningsvis så blir det även bättre i 
	fortsättningen när man lärt sig mer och kan lägga ner mer tid på designen. 
	 <p> 
	Jag använder mig av Notepad++ (även om jag stuntals undrar om jag skulle använda något annat program). Men det fungerar bra hitills. Får dock inte mycket hjälp
	när jag kodar vilket skulle givetvis vara en fördel om jag fick. men då jag känner mig säker i övrigt med notepad och använder det till så mycket annat så
	fortsätter jag använda det ett tag till. kanske byter ut det sen när det blir mer kodande (php funtioner etc).
	 <p> 
	php har jag hållt på med förut, så var inte helt nytt.. även om jag mest har läst koder innan och inte programmerat så mycket på egenhand. jag tyckte övningarna gav
	bra information då jag läste igenom allt, tror jag kom till steg 15 innan jag fick börja lära mig nya saker. men det var även bra och komma ihåg allt hur det var.
	 <p> 
	Döpte mitt anax till webbtemp.. då jag aldrig är bra med namn, så ist för komma på något bra namn så fick det bara heta något som faktiskt beskriver vad det är.
	 <p> 
	strukturen är väll bra, även om det var lite mycket på en gång. så för nu får det vara som det är, i framtiden kan jag tänka mig och ändra på det lite.
	 <p> 
	Det gick bra och inkludera source, inga större problem där. 
	 <p> 
	GitHub har jag inte gjort, även om det är något som kommer längre fram.
	 <p> 
	 Jag la in tärnings testet i en sida och möjlighet och välja hur många kast man vill ha, och tar du för hög siffra får du försöka igen. (så det inte blir för mycket
	 information på en och samma sida), programmet är inte allt för bugtestat (ger tex ingen information om du skriver bokstäver, borde kanske ge feedback på sånt?).
	 <p>
	

</aside>
EOD;

$webbtemp['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mattias Rosengren | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of WebbTemp.
include(WEBBTEMP_THEME_PATH);
