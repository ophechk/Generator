<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Generator</title>
</head>

<body>

    <main>
        <h1>Accueil</h1>
        <p class="intro">Bienvenue sur le site de générateur de mot de passe.</p>
        <p class="intro">Vous pourriez générer n'importe quel mot de passe en
            fonction de la taille ou des caractères que vous voulez utiliser.</p>

        <form method="POST" action="traitement.php">
            <div class="box">
                <div class="form">
                    <p class="form">Générer un mot de passe</p>
                    <p class="text">Choisissez la longueur de votre mot de passe (entre 12 et 20 caractères)</p>
                    <input type="number" name="longueur" min="12" max="20">

                    <p class="text">Cochez les cases pour choisir les paramètres de votre mot de passe :</p>
                    <label class="text">Lettres <input type="checkbox" name="lettres"></label><br>
                    <label class="text">Chiffres <input type="checkbox" name="chiffres"></label><br>
                    <label class="text">Symboles <input type="checkbox" name="symboles"></label><br><br>

                    <button class="button">Envoyer</button>
                </div>
            </div>
        </form>

        <?php
        // Affichage erreur
        if (isset($_SESSION['erreur'])) {
            echo '<p style="color:red;">' . htmlspecialchars($_SESSION['erreur']) . '</p>';
            unset($_SESSION['erreur']);
        }

        // Affichage mot de passe généré
        if (isset($_SESSION['motdepasse'])) {
            echo '<div class="resultat">';
            echo '<p>Voici votre mot de passe :</p>';
            echo '<input type="text" value="' . htmlspecialchars($_SESSION['motdepasse']) . '" readonly>';
            echo '</div>';
            unset($_SESSION['motdepasse']);
        }
        ?>

    </main>

</body>

<footer class="footer">
    © 2025 Generator. Tous droits réservés.
</footer>

</html>