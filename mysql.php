<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="styles.css">
            <title>Sécu WEB</title>
        </head>
        <tbody>
	        <table class ="modern-table">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Âge</th>
                    <th>Titre</th>
                </tr>
                    <?php
                    // Connexion à la base de données
                        $servername = "localhost";
                        $username = "webapp";
                        $password = "abcfqfye";
                        $dbname = "webappdb";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Vérifier la connexion
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Exécuter la requête SQL pour récupérer les données
                        $sql = "SELECT id, nom, prenom, age, titre FROM user";
                        $result = $conn->query($sql);

                        // Afficher les données dans le tableau HTML
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . htmlspecialchars($row["nom"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["prenom"]) . "</td>";
                                echo "<td>" . $row["age"] . "</td>";
                                echo "<td>" . htmlspecialchars($row["titre"]) . "</td>";
                                echo "</tr>";
                                //htmlspecialchart permet d'échapper les caractères spéciaux dans les données 
                                //afin d'éviter les attaques XSS
                            }
                        } else {
                            echo "<tr><td colspan='5'>0 results</td></tr>";
                        }

                        // Fermer la connexion
                        $conn->close();
                    ?>
                </tr>
	        </table>
            <br>

            <div class="button-container">
            <a href="form-personne.php" class="button">Création Personnes</a>
			<a href="index.php" class="button"> Retour acceuil </a>
            </div>

        </tbody>
    </html>