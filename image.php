<?php
	if (isset($_GET["photo"]))
	{
		switch($_GET["photo"])
		{
			// 50F
			case 1:
				$chemin = "images/50/1.jpg";
			break;
			case 2:
				$chemin = "images/50/2.jpg";
			break;
			case 3:
				$chemin = "images/50/3.jpg";
			break;
			case 4:
				$chemin = "images/50/4.jpg";
			break;
			case 5:
				$chemin = "images/50/5.jpg";
			break;
			// 80F
			case 11:
				$chemin = "images/80/11.jpg";
			break;
			case 12:
				$chemin = "images/80/12.jpg";
			break;
			case 13:
				$chemin = "images/80/13.jpg";
			break;
			case 14:
				$chemin = "images/80/14.jpg";
			break;
			case 15:
				$chemin = "images/80/15.jpg";
			break;
			// 100F
			case 21:
				$chemin = "images/100/21.jpg";
			break;
			case 22:
				$chemin = "images/100/22.jpg";
			break;
			case 23:
				$chemin = "images/100/23.jpg";
			break;
			// 120F
			case 31:
				$chemin = "images/120/31.jpg";
			break;
			case 32:
				$chemin = "images/120/32.jpg";
			break;
			case 33:
				$chemin = "images/120/33.jpg";
			break;
			case 34:
				$chemin = "images/120/34.jpg";
			break;
			// Default
			default:
				$chemin = "images/404.jpg";
			break;
		}
		
		$x = isset($_GET["format"]) ? $_GET["format"] : 500;

		header("Content-type: image/jpeg");
		$size = getimagesize($chemin);
		$y = $x * $size[1] / $size[0];
		$img_mini = imagecreatetruecolor ($x, $y);
		imagecopyresampled ($img_mini, imagecreatefromjpeg($chemin), 0, 0, 0, 0, $x, $y, $size[0], $size[1]);
		imagejpeg($img_mini);
	}
	else
		echo "<h1>Error</h1><p>Missing photo GET argument</p>";
?>