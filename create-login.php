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
            $login = $_POST["login"];
            $password = $_POST["password"];

            // Vérifier que les champs ne sont pas vides
            if (empty($login) || empty($password)){
                echo "Erreur: Tous les champs doivent être remplis";
                header("Refresh:3; url=form-login.php");
            } 
            else {
                $login = mysqli_real_escape_string($conn, $_POST["login"]);
                $password = mysqli_real_escape_string($conn, $_POST["password"]);

                // Vérifier si l'utilisateur existe déjà
                $sql_check = "SELECT * FROM credentials WHERE login = '$login'";
                $result = mysqli_query($conn, $sql_check);
                if (mysqli_num_rows($result) > 0) {
                    echo "Erreur: Un utilisateur avec ce login existe déjà";
                    header("Refresh:3; url=form-login.php");
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    $sql = "INSERT INTO credentials(login, password) VALUES ('$login', '$password')";

                    if (mysqli_query($conn, $sql)) {
                        echo "<h3>Login et password créés avec succès</h3>";
                        echo "<h3>Redirection vers la page d'identification dans 5 secondes</h3>";
                        header("Refresh:5; url=login.php");
                    } else {
                        echo "Erreur lors de la création du login et du password : " . mysqli_error($conn);
                        header("Refresh:3; url=form-login.php");
                    }
                }
            }
            // Fermer la connexion à la base de données
            mysqli_close($conn);
        ?>

    </body>
</html>
