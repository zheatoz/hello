<!DOCTYPE html>
<html lang="sv">

<html>

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  
  <!-- links to external stylesheets -->
  <link rel="stylesheet" href="style/stylesheet.css" title="General stylesheet">
  <link rel="alternate stylesheet" href="style/debug.css" title="Debug stylesheet">
  
  <!-- display image as favicon -->
   <link rel="shortcut icon" href="img/favicon_dbwebb.png"> 
   
  <!-- Each page can set $pageStyle to create an internal stylesheet -->
  <?php if(isset($pageStyle)) : ?>
  <style type="text/css">
    <?php echo $pageStyle; ?>
  </style>
  <?php endif; ?>
   
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  
</head>

<!-- The body id helps with highlighting current menu choice -->
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
	
	
	<!-- Above header -->
	<header id="above">
	<!-- Relateted links -->
	<nav class="related">
    <a href="../kmom01/me.php">kmom01</a>
    kmom02
	</nav>
</header>
	<!-- Header -->
	<header id="top">
		<img src="img/logo1.jpg" alt="htmlphp logo"  >
	</div>
	<!-- Navigeringsmeny -->
	<nav class="navmenu">
		<a id="me-" href="me.php">Me</a>
		<a id="report-" href="report.php">redovisning</a>
		<a id="source-" href="viewsource.php">källkod</a>
	</nav>