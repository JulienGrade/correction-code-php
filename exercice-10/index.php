<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul Cercle</title>
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
<h1>Calcul du cercle</h1>

<form action="" method="GET">
    <label for="rayon">Rayon :</label>
    <input type="text" name="rayon" id="rayon" required />

    <label for="choix">Choix :</label>
    <label>
        <select name="choix">
            <option value="1">Périmètre</option>
            <option value="2">Aire</option>
        </select>
    </label>

    <input type="submit" value="Calculer">
</form>

<?php
// Si le choix a été fait
if (!empty($_GET['choix'])) {
    $rayon = (float)$_GET['rayon'];

    if ((int)$_GET['choix'] === 1) {
        echo "Le périmètre d'un cercle de rayon " . $rayon . " est de : " . retournePerimetreCercle($rayon);
    } elseif ((int)$_GET['choix'] === 2) {
        echo "L'aire d'un cercle de rayon " . $rayon . " est de : " . retourneAireCercle($rayon);
    }
}

function retourneAireCercle($rayon): float|int
{
    return $rayon * $rayon * M_PI;
}

function retournePerimetreCercle($rayon): float|int
{
    return 2 * $rayon * M_PI;
}
?>
</body>
</html>
