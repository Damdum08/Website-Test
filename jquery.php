<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset=”utf−8”>
        <title>JQuery</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#toggle-button").click(function() {
                    $("#toggle-content").toggle();
                });
            });
        </script>
        <style>
            #toggle-content {
                display: none;
            }
        </style>
    </head>
    <body>
        <h1>Fin Labo 3</h1>
        <div class="button-container">
            <button id="toggle-button" class="button">Afficher/Cacher</button>
        </div>
            <div id="toggle-content">
                <h2> QUOICOUBè</h2>
            </div>
        

        <div class="button-container">
			<button onclick="goBack()" class="button"> Retour </button>
					<script>
							function goBack() {
									window.history.back();
							}
					</script>
    </body>
</html>