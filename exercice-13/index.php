<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion utilisateur avec rôle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 400px;
        }
        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>Connexion utilisateur avec rôle</h1>

<?php
const NBESSAITOTAL = 3; // Nombre maximum d'essais

session_start();
if (empty($_SESSION['nbEssai'])) {
    $_SESSION['nbEssai'] = 0;
}

// Réinitialisation après 3 essais
if ($_SESSION['nbEssai'] >= NBESSAITOTAL) {
    echo "<p>Réinitialisation en cours...</p>";
    $_SESSION['nbEssai'] = 1;
}
?>

<form action="" method="GET">
    <label for="login">Login :</label>
    <input type="text" name="login" id="login" required />

    <label for="mdp">Mot de passe :</label>
    <input type="password" name="mdp" id="mdp" required />

    <input type="submit" value="Connexion">
</form>

<?php
$listeUtilisateurs = [
    ["Tya", "test1", "admin"],
    ["Milo", "test2", "user"],
    ["Lili", "test3", "user"]
];

if (!empty($_GET['login']) && !empty($_GET['mdp'])) {
    $log = $_GET['login'];
    $mdp = $_GET['mdp'];

    $role = estConnecte($listeUtilisateurs, $log, $mdp);
    if ($role === "") {
        $_SESSION['nbEssai']++;
        echo "Combinaison login / mot de passe incorrecte, encore " . (NBESSAITOTAL - $_SESSION['nbEssai']) . " essais.";
    } else {
        echo "Vous êtes connecté et vos accès sont : " . $role;
        $_SESSION['nbEssai'] = 0; // Réinitialise les essais après une connexion réussie
    }
}

function estConnecte($utilisateurs, $login, $password) {
    foreach ($utilisateurs as $iValue) {
        if ($login === $iValue[0] && $password === $iValue[1]) {
            return $iValue[2]; // Retourne le rôle
        }
    }
    return ""; // Retourne une chaîne vide si non connecté
}
?>
</body>
</html>
