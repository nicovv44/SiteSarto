<!DOCTYPE html>
<html>
	<head>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
		<title>Location maisonnette Savoie</title>
		<link type="text/css" rel="stylesheet" href="style1.css">
		<meta name="description" content="Location d'une maisonnette en Savoie, à proximité du lac du bourget, pour cure thermale, vacances, ski, promenande en montagne." />
	</head>

	<body>
		<header id="TitreIndex">
			<h1>Location maisonnette de vigne</h1>
			<div>
				<h2>Cure thermale</h2>
				<h2>Vacances</h2>
			</div>
		</header>
		
		<div class="blocAccueil">
			<a href="images/SartoExt1.jpg"><img id="imgAccueil" src="images/thumb.SartoExt1.index.jpg" alt=""/></a>
		</div>
		
		<nav>
			<ul>
				<li><a class="bontonNavSelected" href="index.php">Accueil</a></li>
				<li><a href="photosExt.html">Photos extérieures</a></li>
				<li><a href="photosInt.html">Photos intérieures</a></li>
				<li><a href="video.html">Vidéo</a></li>
				<li><a href="calendrierResa.php">Calendrier des réservations</a></li>
				<li><a href="tarifs.html">Tarifs</a></li>
				<li><a href="activiteProxi.html">Activités à proximité</a></li>
				<li><a href="infoCompl.html">Informations compplémentaires</a></li>
				<li><a href="contact.html">Contacts et coordonnées</a></li>
			</ul>
		</nav>
		
		<footer>
			Site de location maisonnette pour cure thermale<br/>
			Hébergé par lws.fr<br/>
			&copy; 2017 Webmaster : Nicolas VERHELST <a href="mailto:webmaster@locationmaisonnettesavoie.fr">webmaster@locationmaisonnettesavoie.fr</a><br/>
			Nombre de visites : 
			<?php
				//=================================================================
				//nombre de visite
				$filename = 'nbrVisites.txt';
				$nombreDeVisites = null;
				//on recupère le nombre de visite dans le fichier
				if (is_readable($filename)) {
					if (!$handle = fopen($filename, 'r')) {//ouverture en mode lecture
						 echo "Impossible d'ouvrir le fichier ($filename)";
						 exit;
					}
					if (($nombreDeVisites = fread($handle, 100)) === FALSE) {//on lit jusqu'à 100 caractères
						echo "Impossible de lire le fichier ($filename)";
						exit;
					}
					fclose($handle);
				} else {
					echo "Le fichier $filename n'est pas accessible en lecture ou est introuvable.";
				}
				//on affiche le nombre de visites
				if($nombreDeVisites) {echo $nombreDeVisites;}
				//on incrémente le nombre de visite récupéré dans le fichier
				if($nombreDeVisites != null) {$nombreDeVisites++;}
				//on écrit ce nouveau nombre dans le fichier
				if (is_writable($filename)) {
					if (!$handle = fopen($filename, 'w')) {//ouverture en mode écriture
						 echo "Impossible d'ouvrir le fichier ($filename)";
						 exit;
					}
					if (fwrite($handle, $nombreDeVisites) === FALSE) {//on écrit le nouveau nombre par dessus l'encien
						echo "Impossible d'écrire dans le fichier ($filename)";
						exit;
					}
					fclose($handle);
				} else {
					echo "Le fichier $filename n'est pas accessible en écriture ou est introuvable.";
				}
				
				
				//=================================================================
				//log du visiteur
				$filename = 'log.txt';
				$ipAddress = isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:"NO REMOTE_ADDR";
				$browser = isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:"NO HTTP_USER_AGENT";
				$referer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"NO HTTP_REFERER";
				$somecontent = "" . date('Y-m-d-H:i:s', time()) . ">" . time() . ">" . $ipAddress . ">" . $browser . ">" . $referer . "<\n";
				//ATTENTION : le < est utilisé pour compter le nombre de visite (ne pas le retirer).
				// Assurons nous que le fichier est accessible en écriture
				if (is_writable($filename)) {
					// Dans notre exemple, nous ouvrons le fichier $filename en mode d'ajout
					// Le pointeur de fichier est placé à la fin du fichier
					// c'est là que $somecontent sera placé
					if (!$handle = fopen($filename, 'a')) {
						 echo "Impossible d'ouvrir le fichier ($filename)";
						 exit;
					}
					// Ecrivons quelque chose dans notre fichier.
					if (fwrite($handle, $somecontent) === FALSE) {
						echo "Impossible d'écrire dans le fichier ($filename)";
						exit;
					}
					fclose($handle);

				} else {
					echo "Le fichier $filename n'est pas accessible en écriture.";
				}
			?>
		</footer>
		
		<script src="JS1.js"></script>
	</body>
</html> 