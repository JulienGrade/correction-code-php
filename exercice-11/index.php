<?php
$prix = [5, 50, 23, 11]; // Tableau des prix
$quantite = [10, 1, 4, 3]; // Tableau des quantités

$total = 0;

// Boucle pour calculer le total
for ($i = 0; $i < sizeof($prix); $i++) {
    $total += $prix[$i] * $quantite[$i];
}

// Affichage du résultat
echo "Le prix total est de : " . $total;

