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
					class Ville {
                        public $nom;
                        public $population;
                        public $province;
                        public $langue;
                    
                        public function __construct($nom, $population, $province, $langue) {
                            $this->nom = $nom;
                            $this->population = $population;
                            $this->province = $province;
                            $this->langue = $langue;
                        }
                    
                        public function getPopulationText() {
                            return "Nombre d'habitants : " . $this->population;
                        }
                    
                        public function getProvinceText() {
                            return "Province : " . $this->province;
                        }
                    }
                    
                    // Définition des villes sous forme d'objets
                    $villes = array(
                        new Ville("Namur", 110000, "Namur", "fr"),
                        new Ville("Bruxelles", 1200000, "Brabant", "fr"),
                        new Ville("Antwerpen", 520000, "Antwerpen", "nl"),
                        new Ville("Liège", 200000, "Liège", "fr"),
                        new Ville("Gent", 260000, "Oost-Vlaanderen", "nl")
                    );
                    
                    // Sélection d'une ville au hasard
                    $ville = $villes[array_rand($villes)];
                    
                    // Affichage du nom et des informations sur la ville sélectionnée
                    echo "<td>".$ville->nom."</td>";
                    if($ville->langue == "fr") {
                        echo "<td>".$ville->getPopulationText()."</td>";
                    } else {
                        echo "<td>".$ville->getProvinceText()."</td>";
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