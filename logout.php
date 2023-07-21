<?php
    session_start();

    // Supprimer le token de la session
    if (isset($_SESSION['auth_token'])) {
        unset($_SESSION['auth_token']);
    }

    // Détruire la session
    session_destroy();

    // Rediriger l'utilisateur vers la page login.php
    header("Location: login.php");
    exit;
?>
