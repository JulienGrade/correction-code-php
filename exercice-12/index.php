<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion utilisateur</title>
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
<h1>Connexion utilisateur</h1>

<form action="" method="GET">
    <label for="login">Login :</label>
    <input type="text" name="login" id="login" required />

    <label for="mdp">Mot de passe :</label>
    <input type="password" name="mdp" id="mdp" required />

    <input type="submit" value="Connexion">
</form>

<?php
$listeUtilisateurs = [
    ["Tya", "test1"],
    ["Milo", "test2"],
    ["Lili", "test3"]
];

// Vérification des informations fournies
if (!empty($_GET['login']) && !empty($_GET['mdp'])) {
    $log = $_GET['login'];
    $mdp = $_GET['mdp'];

    $connecte = estConnecte($listeUtilisateurs, $log, $mdp);
    if (!$connecte) {
        echo "Combinaison login / mot de passe incorrecte, recommencez !";
    } else {
        echo "Vous êtes connecté.";
    }
}

function estConnecte($utilisateurs, $login, $password) {
    foreach ($utilisateurs as $iValue) {
        if ($login === $iValue[0] && $password === $iValue[1]) {
            return true;
        }
    }
    return false;
}
?>
</body>
</html>
