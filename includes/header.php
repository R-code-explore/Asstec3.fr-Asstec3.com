<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Asstec3">

	<meta name="google-site-verification" content="8QrdZR39ICd6j1XBo4yo7p5gen2ZwdEQ6BzxtzoGBN8" />

	<meta name="description" content="Informatique - Bureautique - Infogérance - Cybersecurité - Copieurs - Photocopieurs - Traceurs - Photocopieur oise - photocopieur Somme - Asstec3 - Chambly - Informatique Chambly - Photocopieur Chambly - Copieur pour professionnel Chambly - Oise - Copieur société - photocopieur société oise - téléphonie société oise - téléphonie société ">
	
	<link rel="icon" type="image/x-icon" href="./assets/logo.ico">

	<link rel="stylesheet" href="<?php echo $general_css_link;?>">
	<link rel="stylesheet" href="<?php echo $page_css_link;?>">
	<title><?=$page_title;?></title>
</head>
<body>

<header class="header" id="header">
	<div class="header_background"></div>
	<div class="desktop_nav">
		<a href="./index.php" class="nav_btn" id="accueil">ACCUEIL</a>
		<a href="./informatique.php" class="nav_btn" id="informatique">INFORMATIQUE</a>
		<a href="./bureautique.php" class="nav_btn" id="impression">BUREAUTIQUE</a>
		<a href="./demat.php" class="nav_btn" id="gestion">DEMATERIALISATION</a>
		<a href="./display.php" class="nav_btn" id="ecran">AFFICHAGE DYNAMIQUE</a>
		<a href="./tel_internet.php" class="nav_btn" id="telephonie">TELEPHONIE</a>
		<a href="./internet.php" class="nav_btn" id="internet">INTERNET</a>
		<a href="#footer" class="nav_btn" id="contact">CONTACT</a>
		<a href="./support.php" class="nav_btn" id="support">SUPPORT</a>
	</div>
	<div class="mobile_nav_background" id="menu_background"></div>
	<div class="mobile_nav">
		<a href="tel:+33139374250"><img src="./assets/phone_icone.svg" class="phone_icone"></a>
		<a href="mailto: support@asstec3.fr"><img src="./assets/email_icone.svg"></a>
		<img src="./assets/menu_btn.svg" alt="Bouton de menu téléphone" id="menu_btn">
		<img src="./assets/close-o.svg" alt="bouton pour le close le menu en vue mobile" class="close_menu_btn" id="close_menu_btn">
	</div>

	<?php include './includes/1_sous_menu_informatique.php' ?>
	<?php include './includes/2_sous_menu_bureautique.php' ?>
	<?php include './includes/3_sous_menu_demate.php' ?>
	<?php include './includes/4_sous_menu_affichage.php' ?>
	<?php include './includes/5_sous_menu_phone.php' ?>
	<?php include './includes/6_sous_menu_internet.php' ?>
	<?php include './includes/7_sous_menu_support.php' ?>
	
</header>

<div class="mobile_menu" id="mobile_menu">
		<a href="./index.php" class="nav_btn_mobile" id="accueil_mobile" onclick="close_menu_on_click()"><strong>ACCUEIL</strong></a>
		
		<a href="./informatique.php" class="nav_btn_mobile" id="informatique_mobile" onclick="close_menu_on_click()"><strong>INFORMATIQUE</strong></a>
		
		<a href="./bureautique.php" class="nav_btn_mobile" id="impression_mobile" onclick="close_menu_on_click()"><strong>BUREAUTIQUE</strong></a>
		
		<a href="./demat.php" class="nav_btn_mobile" id="impression_mobile" onclick="close_menu_on_click()"><strong>DEMATERIALISATION</strong></a>
		
		<a href="./display.php" class="nav_btn_mobile" id="ecran_mobile" onclick="close_menu_on_click()"><strong>AFFICHAGE DYNAMIQUE</strong></a>
		
		<a href="./tel_internet.php" class="nav_btn_mobile" id="telephonie_mobile" onclick="close_menu_on_click()"><strong>TELEPHONIE</strong></a>
		
		<a href="./internet.php" class="nav_btn_mobile" id="internet_mobile" onclick="close_menu_on_click()"><strong>INTERNET</strong></a>
		
		<a href="#footer" class="nav_btn_mobile" id="contact_mobile" onclick="close_menu_on_click()"><strong>CONTACT</strong></a>
		
		<a href="./support.php" class="nav_btn_mobile" id="support_mobile" onclick="close_menu_on_click()"><strong>SUPPORT</strong></a>
</div>

<!--Mobile Menu Script-->
<script>
	let menu_btn = document.getElementById("menu_btn")
	let mobile_menu = document.getElementById("mobile_menu")
	let close_menu_btn = document.getElementById("close_menu_btn")
	let menu_background = document.getElementById("menu_background")
	let menu_timer;

	menu_btn.addEventListener("click", () => {
		mobile_menu.style.display = "block";
		mobile_menu.style.transform = "translateX(0)";
		menu_btn.style.display = "none";
		close_menu_btn.style.display = "block";
		menu_background.style.transition = ".2s ease-in-out"
		menu_background.style.display = "none"
	})

	function resetMenuPosition(){
		mobile_menu.style.display = "none"
	}

	close_menu_btn.addEventListener("click", () => {
		mobile_menu.style.transform = "translateX(100%)";
		close_menu_btn.style.display = "none";
		menu_btn.style.display = "block";
		clearTimeout(menu_timer);
		menu_timer = setTimeout(resetMenuPosition, 1000);
	menu_background.style.transition = ".2s ease-in-out"		
		menu_background.style.display = "block"
	})

	function close_menu_on_click(){
		mobile_menu.style.transform = "translateX(100%)";
		close_menu_btn.style.display = "none";
		menu_btn.style.display = "block";
		clearTimeout(menu_timer);
		menu_timer = setTimeout(resetMenuPosition, 1000);
	menu_background.style.transition = ".2s ease-in-out"		
		menu_background.style.display = "block"
	}
	
</script>
