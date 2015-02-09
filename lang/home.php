<?php
	include("lang/nav.php");
	$title = $accueil;
	switch ($_SESSION["country"])
	{
		case "fr":
			$vue_de_l_atelier = "Vue de l'atelier - crédit photographique Melody Bourdil";
		break;
		case 'es':
			$vue_de_l_atelier = "";
		break;
		default:
			$vue_de_l_atelier = "&copy; Bourdil Melody";
		break;
	}
?>