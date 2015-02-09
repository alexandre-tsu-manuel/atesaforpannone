<?php
	include_once("includes/init.php");
	include_once("lang/huilesSurToile.php");
	$format = isset($_GET["format"]) ? $_GET["format"] : 50;
	if ($format != 50 && $format != 80 && $format != 100 && $format != 120 && $format != "poly")
		$format = 50;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?= $title ?> - Atesa for Pannone</title>
		<link rel="stylesheet" media="all" type="text/css" title="index" href="css/index.css" />
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<?php include("includes/nav.php"); ?>
		<div id="slider">
			<?php
				switch($format)
				{
					case 50:
						?>
						<img id="one" src="images/50/1.jpg" alt="Draw" />
						<img id="two" src="images/50/2.jpg" alt="Draw" style="display: none" />
						<img id="three" src="images/50/3.jpg" alt="Draw" style="display: none" />
						<img id="four" src="images/50/4.jpg" alt="Draw" style="display: none" />
						<img id="five" src="images/50/5.jpg" alt="Draw" style="display: none" />
						<?php
					break;
					case 80:
						?>
						<img id="one" src="images/80/11.jpg" alt="Draw" />
						<img id="two" src="images/80/12.jpg" alt="Draw" style="display: none" />
						<img id="three" src="images/80/13.jpg" alt="Draw" style="display: none" />
						<img id="four" src="images/80/14.jpg" alt="Draw" style="display: none" />
						<img id="five" src="images/80/15.jpg" alt="Draw" style="display: none" />
						<img id="six" src="images/80/16.jpg" alt="Draw" style="display: none" />
						<?php
					break;
					case 100:
						?>
						<img id="one" src="images/100/21.jpg" alt="Draw" />
						<img id="two" src="images/100/22.jpg" alt="Draw" style="display: none" />
						<img id="three" src="images/100/23.jpg" alt="Draw" style="display: none" />
						<?php
					break;
					case 120:
						?>
						<img id="one" src="images/120/31.jpg" alt="Draw" />
						<img id="two" src="images/120/32.jpg" alt="Draw" style="display: none" />
						<img id="three" src="images/120/33.jpg" alt="Draw" style="display: none" />
						<img id="four" src="images/120/34.jpg" alt="Draw" style="display: none" />
						<?php
					break;
					case "poly":
						?>
						ERROR
						<?php
					break;
				}
			?>
		</div>
		<div id="arrowLeft">
			<img src="images/flecheGauche.png" alt="previous photo" />
		</div>
		<div id="arrowRight">
			<img src="images/flecheDroite.png" alt="next photo" />
		</div>
		<p id="sizeOfPhotos" style="display: none"><?= $format ?></p>
		<script src="js/jquery.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/nav.js"></script>
	</body>
</html>