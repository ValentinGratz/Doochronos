<header id="head">
	<div class="ctn"> <!-- Contenu principal du header -->
		<div> <!-- Partie aligné à gauche -->
			<img class="btnMenu" onclick="showHeaderMenu();" src="res/img/menu.png" /> <!-- Le bouton menu -->
			<p><a href="index.php"><img src="res/img/white-flat-logo-header.png" /></a></p> <!-- Le logo du site -->
		</div>
		
        <span class="right"> <!-- Partie aligné à droite -->
            <span id="hubPages">
                <a id="boardPage" href="board.php"><img src="res/img/home.png" /></a>
                <a id="configPage" href="configuration.php"><img src="res/img/config-icon.png" /></a>
            </span>
            <img class="btnFamily" onclick="showFamily();" src="res/img/family.png" /><!-- Le bouton Doocode Family -->
        </span>
	</div>
	
    <!-- Le menu de navigation du site -->
	<ul>
		<li id="indexPage">
			<a href="index.php">
				<span>Accueil</span>
			</a>
		</li>
		<li id="downloadPage">
		  <a href="download.php">
				<span>Télécharger</span>
			</a>
		</li>
		<li id="contactPage">
			<a href="contact.php">
				<span>Contact</span>
			</a>
		</li>
		<li id="aboutPage">
			<a href="about.php">
				<span>A propos</span>
			</a>
		</li>
	</ul>
</header>

<!-- Le menu Doocode Family -->
<nav class="family">
	<ul>
		<h1>Doocode Family</h1>
		<li>
			<a href="http://doocode.xyz/">
				<img src="http://doocode.xyz/res/img/white-flat-logo.png" />
				<span>Doocode</span>
			</a>
		</li>
		<li>
			<a href="http://chronos.doocode.xyz/">
				<img src="http://chronos.doocode.xyz/res/img/white-flat-logo.png" />
				<span>Doochronos</span>
			</a>
		</li>
		<li>
			<a href="http://search.doocode.xyz/">
				<img src="http://search.doocode.xyz/res/img/white-flat-logo.png" />
				<span>Doosearch</span>
			</a>
		</li>
		<li>
			<a href="http://dooscape.esy.es/">
				<img src="http://dooscape.esy.es/res/img/white-flat-logo.png" />
				<span>Dooscape</span>
			</a>
		</li>
	</ul>
</nav>

<!-- Importation des scripts JS utilisé dans tous les pages du sites -->
<script src="res/js/jquery-2.2.1.min.js"></script>
<script src="res/js/header.js"></script>