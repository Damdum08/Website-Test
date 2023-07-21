<!DOCTYPE html>
<html>
        <head>
                <link rel="stylesheet" href="styles.css">
                <title>Population totale</title>
		<meta charset="utf-8">
        </head>
        <body>
       		<h1>Population Somme</h1>
        	<table class="table-ex">
                	<thead>
                        	<tr>
                                	<th>Total de flamoush</th>
                                	<th>Total cammembert</th>
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

							$pop_fr = 0;
							$pop_nl = 0;

							foreach ($villes as $ville){
								if ($ville[3] == "fr"){
									$pop_fr += $ville[1];
								}
								elseif ($ville[3] == "nl"){
									$pop_nl += $ville[1];
								}
											}
							echo "<tr>";
							echo "<td>".$pop_nl."</td>";
							echo "<td>".$pop_fr."</td>";
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
