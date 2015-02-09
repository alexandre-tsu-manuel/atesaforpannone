<?php
	switch ($_SESSION["country"])
	{
		case "fr":
			$langues = "Langues";
			$accueil = "Accueil";
			$toiles = "Huiles sur toile";
			$polyptiques = "Polyptyques";
			$dessins = "Dessins";
			$bio = "Questions";
			$contact = "Contact";
		break;
		case 'es':
			$langues = "Lang";
			$accueil = "";
			$toiles = "";
			$polyptiques = "";
			$dessins = "";
			$bio = "";
			$contact = "";
		break;
		default:
			$langues = "Language";
			$accueil = "Home";
			$toiles = "Oil on canevas";
			$polyptiques = "Polyptychs";
			$dessins = "Drawings";
			$bio = "Biography";
			$contact = "Contact";
		break;
	}
?>