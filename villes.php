<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>Liste des villes</title>
  		<meta charset="utf-8">
	</head>
	<body>
  		<h1>Villes</h1>
		<table class="table-ex">
				<thead>
					<tr>
						<th>Ville</th>
						<th>Population</th>
						<th>Langue</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// Tableau multidimensionnel des villes
						$villes = array();
						$villes["nam"] = array("Namur", 110000, "Namur", "fr");
						$villes["bxl"] = array("Bruxelles", 1200000, "Brabant", "fr");
						$villes["anvers"] = array("Antwerpen", 520000, "Antwerpen", "nl");
						$villes["lg"] = array("Liege", 200000, "Liege", "fr");
						$villes["gand"] = array("Gent", 260000, "Oost-Vlaanderen", "nl");
				
						// Boucle foreach pour afficher les informations de chaque ville
						foreach ($villes as $ville) {
							echo "<tr>";
							echo "<td>" . $ville[0] . "</td>";
							echo "<td>" . $ville[1] . "</td>";
							echo "<td>" . ($ville[3] == "fr" ? "Français" : "Néerlandais") . "</td>";
							echo "</tr>";	
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
