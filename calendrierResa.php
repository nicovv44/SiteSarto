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
		
		
		
		<h2 class="titreTableauResa">Tableau des réservations 2017</h2>
		<div class="tableauxResa">
			<?php
				$filename = 'calendrier2017.csv';
				echo "<table>";
				if (($handle = fopen($filename, "r")) !== FALSE) {
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
						$num = count($data);
						echo "<tr>";
						for ($c=0; $c < $num; $c++) {
							if($data[$c] === '0'){
								echo "<td style='background-color: green'>" . "Libre" . "<td/>";
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
				}
				echo "</table>";
				
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
			Site de location du Sarto pour cure thermale<br/>
			Hébergé par Raspberry Pi 3 Model B<br/>
			&copy; 2017 Nicolas VERHELST <a href="mailto:nico.v.44@gmail.com">nico.v.44@gmail.com</a><br/>
		</footer>
		
		<script src="JS1.js"></script>
	</body>
</html> 