<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Sécu WEB</title>
    </head>
    <body>
        <?php
            session_start();
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

            if ($login != "" && $password != ""){
                $sql_query = "SELECT * FROM credentials WHERE login=?";
                $stmt = $conn->prepare($sql_query);
                $stmt->bind_param("s", $login);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();            

                if ($row) {
                    $stored_password = $row['password'];
                    if (password_verify($password, $stored_password)) {
                        
                        session_regenerate_id(true);

                        echo "<h2>Bienvenue " . $login . " !</h2>";
                        $session_id = session_id();

                        echo "<h2>L'ID de session est : " . $session_id . "</h2>";
                        echo "test 2";

                        // Générer et stocker le token
                        $userId = $row['id'];
                        $token = bin2hex(random_bytes(32));
                        $expiryDate = date('Y-m-d H:i:s', strtotime('+1 hour'));
                        echo "test 3";

                        // Insérer le token dans la base de données
                        try {
                            $stmt = $conn->prepare("INSERT INTO token (user_id, token, expiry_date) VALUES (?, ?, ?)");
                            $stmt->bind_param("iss", $userId, $token, $expiryDate);
                            $stmt->execute();
                            echo "test 4";
                            // Stocker le token dans la session
                            $_SESSION['auth_token'] = $token;
                        }   
                        catch (Exception $e) {
                            echo "Erreur lors de la création du token : " . $e->getMessage();
                        }

                    } else {
                            ?>
                            <script type="text/javascript">
                                alert("Login ou mot de passe incorrect");
                            </script>
                            <?php
                            header("Refresh:0; url=login.php");
                        }
                } 
                else {
                    ?>
                    <script type="text/javascript">
                        alert("Login ou mot de passe incorrect");
                    </script>
                    <?php
                        header("Refresh:0; url=login.php");
                }
            }
        ?>
        <div class="button-container">
            <a href="logout.php" class="button"> Se déconnecter </a>
        </div>
        <div class="button-container">
            <button onclick="goBack()" class="button"> Retour </button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>
        <div class="button-container">
            <a href="index.php" class="button"> Retour accueil </a>
        </div>
    </body>
</html>
