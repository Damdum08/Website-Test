<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>Limites</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Limites en PHP</h1>
        <h2> La limites des fichiers en upload, etc sont limités à :</h2>
        <ul> 
            <li>post_max_size = 8M</li>
            <li>upload_max_filesize = 2M</li>
            <li>max_file_uploads = 20</li>
        </ul>

        <h2>Uploader un fichier</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <button type="submit">Envoyer</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_FILES['file'])) {
                    $file = $_FILES['file'];
                    if ($file['error'] === UPLOAD_ERR_OK) {
                        $filename = basename($file['name']);
                        move_uploaded_file($file['tmp_name'], '/var/www/html/uploads/' . $filename);
                        echo 'Upload réussi : ' . $filename;
                    } else {
                        echo 'Erreur lors de l\'upload : ' . $file['error'];
                    }
                } else {
                    echo 'Aucun fichier sélectionné';
                }
            }
        ?>

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