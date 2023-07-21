<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>Somme</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Liste de mes jeux vidéo préférés</h1>
        
        <div class="liste-jeux">
            <script>
                // Déclaration et initialisation du tableau
                let jeuxVideos = ['Minecraft', 'CSGO', 'Rocket-League'];

                // Fonction pour afficher les éléments du tableau dans la page HTML
                function afficherTableau(tableau) {
                    let liste = document.createElement('ul');
                    for (let i = 0; i < tableau.length; i++) {
                        let element = document.createElement('li');
                        element.textContent = tableau[i];
                        liste.appendChild(element);
                    }
                document.body.appendChild(liste);
                }

                // Fonction pour ajouter un nouvel élément au tableau et mettre à jour l'affichage
                function ajouterJeuVideo() {
                    let nouvelElement = document.getElementById('nouvelElement').value;
                    jeuxVideos.push(nouvelElement);
                    document.body.removeChild(document.querySelector('ul'));
                    afficherTableau(jeuxVideos);
                }

                // Appel de la fonction pour afficher les éléments du tableau
                afficherTableau(jeuxVideos);

                // Ajout d'un champ de texte et d'un bouton à la page
                let champTexte = document.createElement('input');
                champTexte.type = 'text';
                champTexte.id = 'nouvelElement';
                document.body.appendChild(champTexte);

                let boutonAjouter = document.createElement('button');
                boutonAjouter.textContent = 'Ajouter un jeu vidéo';
                boutonAjouter.addEventListener('click', ajouterJeuVideo);
                document.body.appendChild(boutonAjouter);


            </script>
        </div>

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