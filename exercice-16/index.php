<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un utilisateur</title>
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
        input[type="text"], select, input[type="submit"] {
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
<h1>Création d'un utilisateur</h1>

<form method="post" action="">
    <label for="login">Login :</label>
    <input type="text" name="login" id="login" required />

    <label for="password">Mot de passe :</label>
    <input type="text" name="password" id="password" required />

    <label for="role">Rôle :</label>
    <select name="role" id="role">
        <option value="admin">Administrateur</option>
        <option value="user">Utilisateur</option>
        <option value="visiteur">Visiteur</option>
    </select>

    <input type="submit" value="Valider">
</form>

<?php
$listeUtilisateurs = [
    ["Tya", "test1", "admin"],
    ["Milo", "test2", "user"],
    ["Lili", "test3", "user"]
];

// Gestion de la création d'un utilisateur
if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['role'])) {
    echo "<br />AFFICHAGE AVANT AJOUT<br />";
    afficherDesUtilisateurs($listeUtilisateurs);

    $login = $_POST['login'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $listeUtilisateurs[] = [$login, $password, $role];

    echo "<br />AFFICHAGE APRES AJOUT<br />";
    afficherDesUtilisateurs($listeUtilisateurs);
}

/**
 * Fonction permettant d'afficher des utilisateurs
 */
function afficherDesUtilisateurs($utilisateurs) {
    foreach ($utilisateurs as $utilisateur) {
        afficherUnUtilisateur($utilisateur);
    }
}

/**
 * Fonction permettant d'afficher un utilisateur
 */
function afficherUnUtilisateur($unUser) {
    echo "**************************<br />";
    echo "******** DEBUT AFFICHAGE ********<br />";
    echo "Login de l'utilisateur : " . $unUser[0] . "<br />";
    echo "Mot de passe de l'utilisateur : " . $unUser[1] . "<br />";
    echo "Rôle de l'utilisateur : " . $unUser[2] . "<br />";
    echo "******** FIN ********<br />";
    echo "**************************<br />";
}
?>
</body>
</html>
