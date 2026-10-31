<!DOCTYPE html>

<html lang="nl">
<!--
///////   //		//	 ///////   ///////// 
//		  //		//	 //		   //	  //
//		  //		//	 //		   //	  //
///////   //		//	 ///////   /////////
//        //		//	 	  //   // 	  //
//        // 		//        //   //	  //
///////   ///////   //	 ///////   //	  //
-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Elisa Minten">
  	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	<script src="https://kit.fontawesome.com/08c5593e6d.js" crossorigin="anonymous"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152067621-2"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-152067621-2');
	</script>
	<?php
	include_once('meta.php');  
	$pgKeywords="Elisa Minten";
	$pgDesc="Ik ben Elisa Minten, gepassioneerd in het ontwerpen en ontwikkelen van websites en grafische vormgeving. Neem zeker een kijkje op mijn portfolio!";
	$pgTitle="Gepassionneerd designer en webdeveloper";
	meta($pgKeywords,$pgDesc,$pgTitle);
	?>
</head>
<body>
<script>
	var ua = window.navigator.userAgent;
	var msie = ua.indexOf("MSIE ");

	if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
	{
		document.write('<div class="internet-explorer-message"><p>Sorry, maar deze website kan je niet bezoeken met Internet Explorer. Hiervoor verwijs ik je door naar een andere browser zoals Google chrome, Safari of nog een andere. Er zal een hele nieuwe wereld voor je open gaan. Groetjes Elisa</p><p><img src="images/404.gif"></p></div>')
	}
</script>
<header class="header">
		<div class="overlay">
			<span class="bar left"></span>
			<span class="bar top"></span>
			<!--<span class="bar bottom"></span>
			
			<span class="bar right"></span>-->
		</div>
		<div class="header__wrapper">
			<div class="header__inner">
				
				<div class="header__logo">
					<a href="/">
						<img src="images/logo-elisa-minten-wit.png" alt="logo van Elisa Minten">
					</a>
				</div>
				<div href="#" class="header__toggle-btn" id="toggleBtn" onclick="toggleHeader()">
					<div class="header__hamburger"> 
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="header__menu-name">
						<span>M</span>
						<span>E</span>
						<span>N</span>
						<span>U</span>
					</div>
				</div>
				<div class="header__menu " id="js-header">
					<div class="header__menu-inner">
						<div class="header__nav">
							<ul>
								<li onclick="hideHeader()" class="close-btn">Close
									<div class="close-btn-cross"></div>
									<div class="close-btn-cross"></div>
								</li>
								<li>
									<a href="/">Home</a>
								</li>
								<li>
									<a href="overmij.php">Over mij</a>
								</li>
								<li>
									<a href="creatief.php">Creatieve skills</a>
								</li>
								<li>
									<a href="grafischwerk.php">Grafisch werk</a>
								</li>
								<li>
									<a href="projecten.php">Projecten</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>