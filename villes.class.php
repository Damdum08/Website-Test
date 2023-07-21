<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>Liste villes (Constructeur)</title>
  		<meta charset="utf-8">
	</head>
	<body>
  	    <h1>Villes</h1>
        <table class="table-ex">
                <thead>
                    <tr>
                        <th>Ville</th>
                        <th>Population</th>
                        <th>Province</th>
                        <th>Langue</th>
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
                        }
                        $villes = array(
                            new Ville("Namur", 110000, "Namur", "fr"),
                            new Ville("Bruxelles", 1200000, "Brabant", "fr"),
                            new Ville("Antwerpen", 520000, "Antwerpen", "nl"),
                            new Ville("Liege", 200000, "Liege", "fr"),
                            new Ville("Gent", 260000, "Oost-Vlaanderen", "nl")
                        );
                        foreach ($villes as $ville) {
                            echo "<tr>";
                            echo "<td>".$ville->nom."</td>";
                            echo "<td>".$ville->population."</td>";
                            echo "<td>".$ville->province."</td>";
                            echo "<td>".$ville->langue."</td>";
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