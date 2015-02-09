<?php
	include_once("geoloc/geoipcity.inc");
	include_once("geoloc/geoipregionvars.php");
	
	function getIP()
	{
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		elseif (isset($_SERVER['HTTP_CLIENT_IP']))
			return $_SERVER['HTTP_CLIENT_IP'];
		else
			return $_SERVER['REMOTE_ADDR'];
	}
	
	function setCountry()
	{
		$gi = geoip_open(realpath("geoloc/GeoLiteCity.dat"), GEOIP_STANDARD);
		$record = geoip_record_by_addr($gi, getIP());
		if (!$record)
			$language = "en";
		else
			$language = $record->country_name;
		switch ($language)
		{
			case "France":
				$_SESSION["country"] = "fr";
			break;
			case "Spain":
				$_SESSION["country"] = "es";
			break;
			default:
				$_SESSION["country"] = "en";
			break;
		}
		geoip_close($gi);
	}
?>