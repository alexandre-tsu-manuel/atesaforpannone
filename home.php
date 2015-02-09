<?php
	include_once("includes/init.php");
	include_once("lang/home.php");
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
		<section class="sectionAccueil">
			<img id="photoAccueil" src="images/bigPhotoAccueil.jpg" alt="paint" />
			<p id="VDLA"><?= $vue_de_l_atelier ?></p>
		</section>
		<!--<script src="https://raw.github.com/LeaVerou/prefixfree/gh-pages/prefixfree.min.js"></script>-->
		<script src="js/jquery.js"></script>
		<script src="js/home.js"></script>
		<script src="js/nav.js"></script>
	</body>
</html>