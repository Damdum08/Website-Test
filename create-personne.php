<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="styles.css">
            <title>Sécu WEB</title>
        </head>
        <body>
            <?php
                // Connexion à la base de données
                $servername = "localhost";
                $username = "webapp";
                $password = "abcfqfye";
                $dbname = "webappdb";

                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Vérifier la connexion
                if (!$conn) {
                    die("La connexion a échoué: " . mysqli_connect_error());
                }
                
                // Récupérer les données du formulaire
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $age = $_POST["age"];
                $titre = $_POST["titre"];

                // Vérifier que les champs ne sont pas vides
                if (empty($nom) || empty($prenom) || empty($age) || empty($titre)) {
                    echo "Erreur: Tous les champs doivent être remplis";
                    header("Refresh:3; url=form-personne.php");

                } 
                
                else {
                    // Échapper les caractères spéciaux pour éviter les failles de sécurité
                    $nom = mysqli_real_escape_string($conn, $nom);
                    $prenom = mysqli_real_escape_string($conn, $prenom);
                    $age = mysqli_real_escape_string($conn, $age);
                    $titre = mysqli_real_escape_string($conn, $titre);

                    // Créer la requête SQL d'insertion
                    $sql = "INSERT INTO user (nom, prenom, age, titre) VALUES ('$nom', '$prenom', '$age', '$titre')";

                    // Exécuter la requête SQL
                    if (mysqli_query($conn, $sql)) {
                        echo "<h3>L'utilisateur a été créé avec succès</h3>";
                        echo "<h3>Redirection vers la table dans 5 secondes</h3>";
                        header("Refresh:5; url=mysql.php");
                    } else {
                        echo "Erreur lors de la création de l'utilisateur : " . mysqli_error($conn);
                        header("Refresh:3; url=form-personne.php");
                    }
                }
                
                // Fermer la connexion à la base de données
                mysqli_close($conn);
            ?>

        </body>
    </html>