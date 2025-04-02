<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 1</title>
</head>
<body>
<?php

const TVA = 20;
$prixHT=10;
echo "Voici le prix : <br/>";
echo $prixHT." € H.T - ".($prixHT * TVA /100 + $prixHT). " € T.T.C";

// Fonction avec typage des paramètres et du retour
function calculerPrixTTC(float $prixHT): float {
    return $prixHT * (1 + TVA / 100);
}

$prixHT = 10.0;

echo "Voici le prix : <br/>";
echo $prixHT . " € H.T - " . calculerPrixTTC($prixHT) . " € T.T.C";
?>
</body>
</html>
