<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>Hazard</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Le Hazard</h1>
		<div class="présentation">
		<h2> Affiche le nombre d'habitant si c'est un province fr sinon on affiche sa province </h2>
		</div>
		<table class="table-ex">
			<thead>
				<tr>
					<th> Ville au HAZARD </th>
					<th> Information </th>
				</tr>
			</thead>
			<tbody>
				<?php
					// Définition du tableau des villes
					$villes = array();
					$villes["nam"] = array("Namur", 110000, "Namur", "fr");
					$villes["bxl"] = array("Bruxelles", 1200000, "Brabant", "fr");
					$villes["anvers"] = array("Antwerpen", 520000, "Antwerpen", "nl");
					$villes["lg"] = array("Liège", 200000, "Liège", "fr");
					$villes["gand"] = array("Gent", 260000, "Oost-Vlaanderen", "nl");

					// Sélection d'une ville au hasard
					$ville_key = array_rand($villes);
					$ville = $villes[$ville_key];

					// Affichage du nom et du nombre d'habitants ou de la province de la ville sélectionnée
					echo "<td>".$ville[0]."</td>";
					if($ville[3] == "fr") {
						echo "<td> Nombre d'habitants :".$ville[1]."</td>";
					}
					else{
						echo "<td> Province flamande : ".$ville[2]."</td>";
					}
				?>
			</tbody>
		</table>
		
		<div class="button-container">
			<button onclick="goBack()" class="button"> Retour </button>
			<script>
				function goBack() {
					window.history.back();
				}
			</script>
		</div>
	</body>	
</html>
