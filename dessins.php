<?php
	include_once("includes/init.php");
	include_once("lang/dessins.php");
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
		<section id="draws">
			<?php
				for ($i = 1 ; $i < 69 ; $i++)
					echo '<img id="' . $i . '" src="images/miniDraw/('. $i . ').jpg" alt="dessin ' . $i . '" />';
			?>
		</section>
		<script src="https://raw.github.com/LeaVerou/prefixfree/gh-pages/prefixfree.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/nav.js"></script>
		<script src="js/dessins.js"></script>
	</body>
</html>