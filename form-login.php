<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="styles.css">
            <title>Sécu WEB</title>
        </head>
        <body>
            <h2>Créer un Login-Password</h2>
            <form action="create-login.php" method="POST" autocomplete="off">
                <!-- autocomplete is disabled to prevent browser from remembering values-->
                <label for="login">Login :</label>
                <input type="text" name="login" required><br>

                <label for="password">Paswword :</label>
                <input type="text" name="password" required><br>

                <input type="submit" value="Créer">
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
			<a href="index.php" class="button"> Retour acceuil </a>
			</div>
        </body>
    </html>