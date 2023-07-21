<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset=”utf−8”>
        <title>Secret</title>
    </head>
    <body>
        <h1>Labo 3</h1>
        <h2>Cacher un secret</h2>
        <div class="button-container">
            <!--
            <button onclick="cacherSecret()" class="button">Cacher</button>
            <button onclick="afficherSecret()" class="button">Afficher</button>
            -->

            <button onclick="cacherSecret()" class="button">Cacher</button>
            
        </div>
        <div id="secret">
            <h2>Mr Bodart est gentil</h2>
        </div>
        <script>
            /*
            CES 2 FONCTIONS PERMETTENT DE FAIRE FONCTIONNER LES 2 BOUTONS AFFICHER - CACHER
            function cacherSecret() {
                var element = document.getElementById("secret");
                element.style.display = "none";
            }
            function afficherSecret(){
                var element = document.getElementById("secret");
                element.style.display = "block";
            }
            */
            function cacherSecret() {
                var element = document.getElementById("secret");
                var button = document.getElementsByTagName("button")[0];
                if (element.style.display === "none") {
                    element.style.display = "block";
                    button.textContent = "Cacher";
                } else {
                    element.style.display = "none";
                    button.textContent = "Montrer";
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