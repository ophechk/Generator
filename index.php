<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Générateur de mot de passe</title>
</head>

<body>

    <main>
        <h1>Accueil</h1>
        <p class="intro">Bienvenue sur le site de générateur de mot de passe.</p>
        <p class="intro">Vous pourriez générer n'importe quel mot de passe en
            fonction de la taille ou des caractères que vous voulez utiliser.</p>

        <form method="POST" action="">
            <div class="box">
                <div class="form">
                    <p class="form">Générer un mot de passe</p>
                    <p class="text">Choisissez la longueur de votre mot de passe (entre 12 et 20 caractères)</p>
                    <input type="number" name="longueur" min="12" max="20">

                    <p class="text">Cochez les cases pour choisir les paramètres de votre mot de passe :</p>
                    <label class="text">Lettres <input type="checkbox" name="lettres" checked></label><br>
                    <label class="text">Chiffres <input type="checkbox" name="chiffres" checked></label><br>
                    <label class="text">Symboles <input type="checkbox" name="symboles" checked></label><br><br>

                    <button type="submit">Envoyer</button>
                </div>
            </div>
        </form>

        <div class="resultat">
            <p class="resultat">Voici votre mot de passe :</p>
        </div>




    </main>

</body>

<footer>

</footer>

</html>