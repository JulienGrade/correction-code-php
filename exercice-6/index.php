<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de produit</title>
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
        select, input[type="text"], input[type="submit"] {
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
<h1>Quel produit voulez-vous acheter ?</h1>

<form method="post" action="">
    <label for="produit">Choisissez un produit :</label>
    <label>
        <select name="produit" style="width:100px">
            <option value="1">TV : 400€</option>
            <option value="2">Ordinateur : 700€</option>
            <option value="3">Téléphone : 200€</option>
            <option value="4">Portable : 900€</option>
        </select>
    </label>
    <label for="quantite">Combien de produits voulez-vous ?</label>
    <label>
        <input type="text" name="quantite" style="width:50px" />
    </label>
    <input type="submit" value="Valider">
</form>

<?php
const TVA = 20;

if (!empty($_POST['produit']) && !empty($_POST['quantite'])) {
    $choix = (int)$_POST['produit'];
    $nbProduits = (int)$_POST['quantite'];

    $prix = 0;
    switch ($choix) {
        case 1:
            $prix = 400;
            break;
        case 2:
            $prix = 700;
            break;
        case 3:
            $prix = 200;
            break;
        case 4:
            $prix = 900;
            break;
        default:
            echo "Produit inexistant, recommencez";
            break;
    }

    echo "Total HT : " . ($prix * $nbProduits) . " €<br>";
    echo "Total TTC : " . ($prix * $nbProduits * (1 + TVA / 100)) . " €<br>";
}
?>
</body>
</html>
