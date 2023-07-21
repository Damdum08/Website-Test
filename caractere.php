<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset=”utf−8”>
        <title>Caractère</title>
    </head>
    <body>
        <h1>Labo 3</h1>
        <h2>Vérification de caractères alphanumériques</h2>
        <div class="présentation">
            <p>Entrez des caractères alphanumériques :</p>
        </div>
        <input type="text" id="input" oninput="verifier()">
        <div id="erreur"></div>
        <script>
            function verifier() {
                var input = document.getElementById("input").value;
                var regex = /^[a-zA-Z0-9]+$/;
                var erreur = document.getElementById("erreur");
                if (regex.test(input)) {
                    erreur.textContent = "";
                } else {
                    erreur.textContent = "Les caractères doivent être alphanumériques";
                }
            }
        </script>
        
        <div class="button-container">
			<button onclick="goBack()" class="button"> Retour </button>
					<script>
							function goBack() {
									window.history.back();
							}
					</script>
    </body>
</html>