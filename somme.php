<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>Somme</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Fonction Somme</h1>
        <script>
            function sum(a, b) {
                return a + b;
                }

            let num1 = 10;
            let num2 = 5;

            let result = sum(num1, num2);
            
            //Affiche dans la console du navigateur (F12)
            console.log(result);
            //Affiche dans le pop-up
            alert(sum(5, 6));
            
        </script>

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