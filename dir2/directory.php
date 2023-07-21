<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>POP-UP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Apparition d'un pop-up</h1>
        <script>
            alert("Bonjour la populasse");
        </script>
        <!--
        <button onclick="openPopup()">Ouvrir le pop-up</button>
        <script>
            function openPopup() {
                // Dimension de la fenêtre pop-up
                var width = 400;
                var height = 200;

                // Calcul de la position centrée sur l'écran
                var left = (screen.width / 2) - (width / 2);
                var top = (screen.height / 2) - (height / 2);

                // Options de la fenêtre pop-up
                var options = "width=" + width + ",height=" + height + ",top=" + top + ",left=" + left + ",resizable=no";

                // Ouvre la fenêtre pop-up
                window.open("popup.html", "popup", options);
            }
        </script>-->
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
