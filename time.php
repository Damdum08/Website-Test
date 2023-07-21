<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>Time</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Horloge</h1>
        <div id="horloge"></div>
        <script>
            function afficherHeure() {
                var date = new Date(); // obtenir l'heure actuelle
                var heures = date.getHours().toString().padStart(2, '0');
                var minutes = date.getMinutes().toString().padStart(2, '0');
                var secondes = date.getSeconds().toString().padStart(2, '0');
                var heureAffichage = heures + ':' + minutes + ':' + secondes;
                document.getElementById('horloge').innerHTML = heureAffichage;
            }
            setInterval(afficherHeure, 1000); // mettre à jour l'affichage chaque seconde
        </script>

        </table>
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