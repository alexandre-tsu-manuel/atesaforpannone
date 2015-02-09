<?php
	include_once("includes/init.php");
	include_once("lang/bio.php");
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
		<section  class="sectionRight" style="text-align: justify">
			<?php
				if (isset($_GET["atesa"]))
				{
					?>
					<h1><?= $premier_h1 ?></h1>
					<p><?= $bio_atesa ?></p>
					<h1><?= $deuxieme_h1_atesa ?></h1>
					<p><?= $interview_atesa ?></p>
					<?php
				}
				else
				{
					?>
					<h1><?= $premier_h1 ?></h1>
					<p><?= $bio_olivier ?></p>
					<h1><?= $deuxieme_h1 ?> Olivier Pannone</h1>
					<p><?= $interview_olivier ?></p>
					<?php
				}
			?>
		</section>
		<script src="https://raw.github.com/LeaVerou/prefixfree/gh-pages/prefixfree.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/nav.js"></script>
	</body>
</html>