<form action="" method="get">
    <label>Login :</label>
    <input type="text" name="login">

    <label>Mot de passe :</label>
    <input type="text" name="mdp">

    <input type="submit" value="Connexion">
</form>

<?php
$listeUtilisateurs = [
    ["Tya", "test1"],
    ["Milo", "test2"],
    ["Lili", "test3"]
];

// si le choix a été fait
if (!empty($_GET['login']) && !empty($_GET['mdp'])) {
    $log = $_GET['login'];
    $mdp = $_GET['mdp'];

    $connecte = estConnecte($listeUtilisateurs, $log, $mdp);
    if (!$connecte) {
        echo "Combinaison login / mot de passe incorrect, recommencez !";
    } else {
        echo "Vous êtes connecté";
    }
}

function estConnecte($utilisateurs, $login, $password): bool
{
    for ($i = 0; $i < sizeof($utilisateurs); $i++) {
        if ($login === $utilisateurs[$i][0] && $password === $utilisateurs[$i][1]) {
            return true;
        }
    }
    return false;
}
?>
