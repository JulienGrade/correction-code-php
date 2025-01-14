<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
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
        input[type="text"], input[type="submit"] {
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
        .carre {
            font-family: monospace;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<h1>Affichage d'un carré creux</h1>

<form method="post" action="">
    <label for="taille">Quelle taille voulez-vous ?</label>
    <input type="text" name="taille" id="taille" style="width:50px" />
    <input type="submit" value="Valider">
</form>

<?php
if (!empty($_POST['taille'])) {
    $tailleCarre = (int)$_POST['taille'];

    // Générer la ligne complète (grande ligne)
    $grandeLigne = "";
    for ($i = 1; $i <= $tailleCarre; $i++) {
        $grandeLigne .= "*";
    }

    // Générer la ligne creuse (petite ligne)
    $petiteLigne = "";
    for ($j = 1; $j <= $tailleCarre; $j++) {
        if ($j === 1 || $j === $tailleCarre) {
            $petiteLigne .= "*";
        } else {
            $petiteLigne .= "&nbsp;&nbsp;&nbsp;";
        }
    }

    // Afficher le carré
    echo "<div class='carre'>";
    for ($k = 1; $k <= $tailleCarre; $k++) {
        if ($k === 1 || $k === $tailleCarre) {
            echo $grandeLigne . "<br />";
        } else {
            echo $petiteLigne . "<br />";
        }
    }
    echo "</div>";
}
?>
</body>
</html>
