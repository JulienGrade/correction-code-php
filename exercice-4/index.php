<?php

// Générer trois nombres aléatoires entre 1 et 20
$alea1 = mt_rand(1, 20);
$alea2 = mt_rand(1, 20);
$alea3 = mt_rand(1, 20);

$petit = 0;
$grand = 0;

// Afficher les nombres générés
echo "nb1 : $alea1 - nb2 : $alea2 - nb3 : $alea3<br>";

// Trouver le plus petit nombre
if ($alea1 <= $alea2 && $alea1 <= $alea3) {
    $petit = $alea1;
} elseif ($alea2 <= $alea1 && $alea2 <= $alea3) {
    $petit = $alea2;
} else {
    $petit = $alea3;
}

// Trouver le plus grand nombre
if ($alea1 >= $alea2 && $alea1 >= $alea3) {
    $grand = $alea1;
} elseif ($alea2 >= $alea1 && $alea2 >= $alea3) {
    $grand = $alea2;
} else {
    $grand = $alea3;
}

// Afficher les résultats
echo "$petit est le nombre le plus petit<br>";
echo "$grand est le nombre le plus grand<br>";

