<?php
	require_once('mobile/mobile_device_detect.php');
	session_start();
	if (isset($_GET["disconnect"]))
		session_destroy();
	include_once("includes/functions.php");
	if (isset($_GET["lang"]))
		if ($_GET["lang"] == "fr" || $_GET["lang"] == "en" || $_GET["lang"] == "es")
			$_SESSION["country"] = $_GET["lang"];
	if (!isset($_SESSION["country"]))
		setCountry();
?>