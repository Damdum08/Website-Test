<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title> 50K </title>
	</head>
	<body>

		<div class="présentation">
			<h1> Villes > 50k </h1>
			<p> Explications </p>
		</div>

		<table class="table-ex">
			<thead>
				<tr>
					<th>Villes de plus de 500 000 habitants</th>
				</tr>
			</thead>
			<tbody>
				<?php
					// Définition du tableau des villes
					$villes = array();
					$villes["nam"] = array("Namur", 110000, "Namur", "fr");
					$villes["bxl"] = array("Bruxelles", 1200000, "Brabant", "fr");
					$villes["anvers"] = array("Antwerpen", 520000, "Antwerpen", "nl");
					$villes["lg"] = array("Liege", 200000, "Liege", "fr");
					$villes["gand"] = array("Gent", 260000, "Oost-Vlaanderen", "nl");

					// Affichage des villes de plus de 500 000 habitants
					echo "<tr>";
					echo "<td>";
					foreach ($villes as $ville) {
	  					if ($ville[1] > 500000) {
							echo $ville[0]." - ".$ville[1]." habitants<br>";
  						}
					}
					echo "</td>";
					echo "</tr>";
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
