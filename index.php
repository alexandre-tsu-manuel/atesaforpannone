<?php
	include_once("includes/init.php");
	if (mobile_device_detect())
	{
		header("location: home.php");
		exit();
	}
	include_once("lang/home.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Atesa Hedayat for Pannone</title>
		<link rel="stylesheet" media="all" type="text/css" title="index" href="css/index.css" />
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<style>
			#intro .big
			{
				font-size: 5em;
				text-align: center;
			}
			
			#intro .little
			{
				font-size: 2em;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div id="intro">
			<p class="big">
				<strong>Atesa Hedayat</strong><br />
				for<br />
				PANNONE<br />
			</p>
			<p class="little">
				Copyright 2012© All rights reserved<br />
				Powered by Alexandre MANUEL
			</p>
		</div>
		<div id="other" style="display: none;">
			<?php include("includes/nav.php"); ?>
			<section class="sectionRight">
				<center>
					<img src="images/bigPhotoAccueil.jpg" alt="paint" />
					<p><?= $vue_de_l_atelier ?></p>
				</center>
			</section>
		</div>
		<script src="https://raw.github.com/LeaVerou/prefixfree/gh-pages/prefixfree.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/intro.js"></script>
		<script src="js/nav.js"></script>
	</body>
</html>