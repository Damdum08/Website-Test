<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="styles.css">
            <title>Sécu WEB</title>
        </head>
        <body>
            <h2>IDENTIFICATION</h2>
            <form action="home.php" method="POST" autocomplete="off">
                <!-- autocomplete is disabled to prevent browser from remembering values-->
                <label for="login">Login :</label>
                <input type="text" name="login" required><br>

                <label for="password">Password :</label>
                <input type="text" name="password" required><br>

                <input type="submit" value="Connexion">
            </form>
            <div class="button-container">
				<button onclick="goBack()" class="button"> Retour </button>
						<script>
								function goBack() {
										window.history.back();
								}
						</script>
			</div>
            <div class="button-container">
                <a href="form-login.php" class="button">Création Users</a>
                <a href="index.php" class="button"> Retour acceuil </a>
			</div>
            
        </body>
    </html>