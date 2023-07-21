<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset=”utf−8”>
        <title>DOM</title>
    </head>
    <body>
        <h1>Labo 3</h1>
        <h2>DOM dans le F12</h2>
        <h3>Le DOM est une interface de programmation pour des documents HTML 
            ou XML qui représente le document (la page web actuelle) sous une 
            forme qui permet aux langages de script comme le JavaScript d'y 
            accéder et d'en manipuler le contenu et les styles</h3> 
        <script>
            function parcourirElement(element) {
                console.log(element); // afficher l'élément courant dans la console
                var enfants = element.children; // obtenir les enfants de l'élément courant
                for (var i = 0; i < enfants.length; i++) {
                    parcourirElement(enfants[i]); // appeler la fonction récursivement pour chaque enfant
                }
            }

                parcourirElement(document.documentElement); // appeler la fonction avec la racine du DOM comme argument
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