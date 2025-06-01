<?php

session_start();
function genererMotDePasse(int $longueur, bool $lettres, bool $chiffres, bool $symboles): string
{
    $caracteresLettres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $caracteresChiffres = '0123456789';
    $caracteresSymboles = '!@#$%^&*()_-+=<>?';

    $caracteresUtilisables = '';

    if ($lettres) {
        $caracteresUtilisables .= $caracteresLettres;
    }
    if ($chiffres) {
        $caracteresUtilisables .= $caracteresChiffres;
    }
    if ($symboles) {
        $caracteresUtilisables .= $caracteresSymboles;
    }

    if ($caracteresUtilisables === '') {
        return ''; // ou tu peux gérer une erreur ici
    }

    $motDePasse = '';
    $longueurMax = strlen($caracteresUtilisables);

    for ($i = 0; $i < $longueur; $i++) {
        $indexAleatoire = random_int(0, $longueurMax - 1);
        $motDePasse .= $caracteresUtilisables[$indexAleatoire];
    }

    return $motDePasse;
}

// Vérifie que le formulaire est soumis en POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $longueur = (int) $_POST['longueur'];
    $lettres = isset($_POST['lettres']);
    $chiffres = isset($_POST['chiffres']);
    $symboles = isset($_POST['symboles']);

    if ($longueur < 12 || $longueur > 20 || (!$lettres && !$chiffres && !$symboles)) {
        $_SESSION['erreur'] = "Veuillez choisir une longueur valide et au moins une option.";
        header("Location: index.php");
        exit;
    }

    $motDePasse = genererMotDePasse($longueur, $lettres, $chiffres, $symboles);

    $_SESSION['motdepasse'] = $motDePasse;
    header("Location: index.php");
    exit;
}

?>