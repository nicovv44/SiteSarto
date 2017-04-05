<!DOCTYPE html>
<html>
	<head>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
		<title>Sarto Savoie</title>
		<link type="text/css" rel="stylesheet" href="style1.css">
	</head>

	<body>
		<header class="TitreNonIndex">
			<h1>Maisonnette de vigne</h1>
			<div>
				<h2>Calendrier des réservations</h2>
			</div>
		</header>
		
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="photosExt.html">Photos extérieures</a></li>
				<li><a href="photosInt.html">Photos intérieures</a></li>
				<li><a href="video.html">Vidéo</a></li>
				<li><a class="bontonNavSelected" href="calendrierResa.php">Calendrier des réservations</a></li>
				<li><a href="tarifs.html">Tarifs</a></li>
				<li><a href="activiteProxi.html">Activités à proximité</a></li>
				<li><a href="infoCompl.html">Informations compplémentaires</a></li>
				<li><a href="contact.html">Contacts et coordonnées</a></li>
			</ul>
		</nav>
		
		
		
		
		<div class="tableauxResa">
			<h2 class="titreTableauResa"><span>Réservations 2017</span></h2>
			<?php
				$filename = 'calendrier2017.csv';
				if (($handle = fopen($filename, "r")) !== FALSE) {
					echo "<table>";
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
						$num = count($data);
						echo "<tr>";
						for ($c=0; $c < $num; $c++) {
							if($data[$c] === '0'){
								echo "<td style='background-color: #01DFA5'>" . "Libre" . "<td/>";
							}
							else if($data[$c] === '1' && $c!=0){
								echo "<td style='background-color: red'>" . "Pris" . "<td/>";
							}
							else if(!($data[$c] === ' ')){
								echo "<td style='background-color: rgb(101,147,254); font-weight: bold;'>" . $data[$c] . "<td/>";
							}
						}
						echo "</tr>";
					}
					fclose($handle);
					echo "</table>";
				}
				else {echo "<p style='color : red;'>Fichier $filename non  trouvé.</p>";}
				
				
				
				echo "<style>
					table{
						border-collapse: collapse;
						text-align: center;
						margin: auto;
					}
					tr{
						border: 2px solid black;
					}
					th{
						border: 2px solid black;
					}
					td{
						border: 2px solid black;
					}
				</style>";
			?>
			
			<h2 class="titreTableauResa"><span>Réservations 2018</span></h2>
			<?php
				$filename = 'calendrier2018.csv';
				if (($handle = fopen($filename, "r")) !== FALSE) {
					echo "<table>";
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
						$num = count($data);
						echo "<tr>";
						for ($c=0; $c < $num; $c++) {
							if($data[$c] === '0'){
								echo "<td style='background-color: #01DFA5'>" . "Libre" . "<td/>";
							}
							else if($data[$c] === '1' && $c!=0){
								echo "<td style='background-color: red'>" . "Pris" . "<td/>";
							}
							else if(!($data[$c] === ' ')){
								echo "<td style='background-color: rgb(101,147,254); font-weight: bold;'>" . $data[$c] . "<td/>";
							}
						}
						echo "</tr>";
					}
					fclose($handle);
					echo "</table>";
				}
				else {echo "<p style='color : red;'>Fichier $filename non  trouvé.</p>";}
				
				
				
				echo "<style>
					table{
						border-collapse: collapse;
						text-align: center;
						margin: auto;
					}
					tr{
						border: 2px solid black;
					}
					th{
						border: 2px solid black;
					}
					td{
						border: 2px solid black;
					}
				</style>";
			?>
		
		</div>
		
		
		<footer>
			Site de location maisonnette pour cure thermale<br/>
			Hébergé par Raspberry Pi 3 Model B<br/>
			&copy; 2017 Nicolas VERHELST <a href="mailto:webmaster@locationmaisonnettesavoie.fr">webmaster@locationmaisonnettesavoie.fr</a><br/>
		</footer>
		
		<script src="JS1.js"></script>
	</body>
</html> 