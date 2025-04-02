<?php
$listeUtilisateurs = [
    ["Tya", "test1", "admin"],
    ["Milo", "test2", "user"],
    ["Lili", "test3", "user"]
];

afficherDesUtilisateurs($listeUtilisateurs);

/**
 * Fonction permettant d'afficher des utilisateurs
 * Entrée : utilisateurs : tableau à deux dimensions
 *          contenant une liste d'utilisateurs
 * Sortie : aucun
 */
function afficherDesUtilisateurs($utilisateurs): void
{
    for ($i = 0; $i < sizeof($utilisateurs); $i++) {
        afficherUnUtilisateur($utilisateurs[$i]);
    }
}

/**
 * Fonction permettant d'afficher un utilisateur
 * Entrée : unUser : tableau de chaîne de caractères avec 3 cases
 *          Indice 0 : login - 1 : mot de passe - 2 : rôle
 * Sortie : aucun
 */
function afficherUnUtilisateur($unUser): void
{
    echo "**************************<br />";
    echo "******** DEBUT AFFICHAGE ********<br />";
    echo "Login de l'utilisateur : " . $unUser[0] . "<br />";
    echo "Mot de passe de l'utilisateur : " . $unUser[1] . "<br />";
    echo "Rôle de l'utilisateur : " . $unUser[2] . "<br />";
    echo "******** FIN ********<br />";
    echo "**************************<br />";
}

