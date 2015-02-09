<nav>
	<ul>
		<li>
			<a class="first" id="langLink"><?= $langues ?></a>
			<ul id="lang" style="display: none;">
				<?php
					if ($_SESSION["country"] != "fr")
						echo '<li><a href="?lang=fr" class="second">Français</a></li>';
					if ($_SESSION["country"] != "en")
						echo '<li><a href="?lang=en" class="second">English</a></li>';
					if ($_SESSION["country"] != "es")
						echo '<li><a href="?lang=es" class="second">Español</a></li>';
				?>
			</ul>
		</li>
		<li><a href="home.php" class="first"><?= $accueil ?></a></li>
		<li>
			<a class="first" id="formatLink"><?= $toiles ?></a><br />
			<ul id="format" style="display: none;">
				<li><a href="huilesSurToile.php?format=50" class="second">50 Figure</a></li>
				<li><a href="huilesSurToile.php?format=80" class="second">80 Figure</a></li>
				<li><a href="huilesSurToile.php?format=100" class="second">100 Figure</a></li>
				<li><a href="huilesSurToile.php?format=120" class="second">120 Figure</a></li>
				<li><a href="huilesSurToile.php?format=poly" class="second"><?= $polyptiques ?></a></li>
			</ul>
		</li>
		<li><a href="dessins.php" class="first"><?= $dessins ?></a></li>
		<li>
			<a class="first" id="bioLink"><?= $bio ?></a>
			<ul style="display: none;" id="bio">
				<li><a href="bio.php?atesa" class="second">Atesa Hedayat</a></li>
				<li><a href="bio.php?pannone" class="second">Olivier Pannone</a></li>
			</ul>
		</li>
		<!--<li><a href="atesaSelection.php" class="first">Atesa's Antics and Selection</a></li>-->
		<li>
			<a class="first" id="contactLink" style="float: left;"><?= $contact ?></a>
			<a href="http://www.facebook.com/olivier.pannone"><img style="margin-left: 10px; margin-top: 10px;" src="images/f_logo.png" alt="logo facebook" height="30px" /></a>
			<ul id="contact" style="opacity: 0; diplay: none;">
				<li><a href="mailto:atesah@gmail.com" class="second" style="text-decoration: underline">atesah@gmail.com</a></li>
				<li><a href="callto:+33662871222" class="second" style="text-decoration: underline">+33 (0)6 62 87 12 22</a></li>
			</ul>
		</li>
	</ul>
</nav>