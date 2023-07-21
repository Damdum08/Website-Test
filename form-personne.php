<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="styles.css">
            <title>Sécu WEB</title>
        </head>
        <body>
            <h2>Créer un utilisateur</h2>
            <form action="create-personne.php" method="POST" autocomplete="off">
                <!-- autocomplete is disabled to prevent browser from remembering values-->
                <label for="nom">Nom :</label>
                <input type="text" name="nom" required><br>

                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" required><br>

                <label for="age">Âge :</label>
                <input type="number" name="age" required><br>

                <label for="titre">Titre :</label>
                <input type="text" name="titre" required><br>

                <input type="submit" value="Créer">
            </form>
            <div class="button-container">
			<a href="index.php" class="button"> Retour acceuil </a>
			</div>
        </body>
    </html>