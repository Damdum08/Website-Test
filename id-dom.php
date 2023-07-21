<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset=”utf−8”>
        <title>DOM</title>
    </head>
    <body>
        <h1>Labo3</h1>
        <h2>Récupérer uniquement la valeur de l'élément DOM identifié par l'ID</h2>
            <input type=”text” id=”login” value=”user”><br>
            <input type=”text” id=”password” value=”1234”><br>
            <div class="id"></div>
            <script>
                var password = document.getElementById("password").value;
                console.log(password);
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