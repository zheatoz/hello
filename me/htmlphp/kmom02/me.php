
<?php
include("incl/config.php"); 
$title = "Min Me-sida om mig själv";
$pageId = "me";

// Define style thats specific for this page
$pageStyle = '
figure { 
 -webkit-border-radius: 10px;
 -moz-border-radius: 10px;
 border-radius: 10px;

 border-color:#898989;

 -moz-box-shadow: 10px 10px 5px #e5e5e5;
 -webkit-box-shadow: 10px 10px 5px #e5e5e5;
 box-shadow: 10px 10px 5px #e5e5e5;
}
';

include("incl/header.php");
?>
<div id="content">
<article class="justify border" style="width:80%">	
<!-- Sidans/Dokumentets huvudsakliga innehåll -->
 <h1>OM MIG SJÄLV</h1>
 
    <figure class="right top">
    <img src="img/me.JPG" width="300" height="300">
    <figcaption>
      <p>Bild: Mattias Rosengren</p>
    </figcaption>
  </figure>

  
 <p>Mitt namn är Mattias Rosengren och är 24 år gammal. Jag bor i förorten till stockholm. Jag har dyslexi så mina
 texter kanske är lite konstigt skrivna då jag inte lägger ner så mycket tid och rättar det nu. det blir en liten snabb
 text om mig själv.
 <p>Jag har läst högskoleingenjör på kth tidigare inom elektroelektronik. Efter det har jag inte riktigt hittat
 något jobb inom det området utan jobbat lite smått med andra saker samtidigt jag läst distanskurser i olika ämnen, 
 mest mot programmerings hållet. Så nu tänkte jag att det skulle vara bra och lära sig programmera inom webb delen, 
 då det är ett område jag inte har så mycket kunskaper inom. Har läst lite webbdesign på gymnasiet och hållit på lite
 med php tidigare.
 <p>Jag har jobbat som väktare sen 2009 (behovs anställd), har även jobbat som it-konsult.
 <p>På fritiden sitter jag mycket vid datorn där jag spelar mycket spel och ser på film/serier. Blivit lite att man
 inte använder tvn något alls längre utan det endast är datorn man använder. Jag spelar även innebandy med vännerna
 på fritiden.
</article>
</div>

<?php 
include("incl/byline.php");
include("incl/footer.php"); ?>
