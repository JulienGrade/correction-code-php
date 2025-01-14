<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de Factorielle</title>
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
    </style>
</head>
<body>
<h1>Calcul de Factorielle</h1>

<form action="" method="GET">
    <label for="nombre">Nombre :</label>
    <label>
        <input type="text" name="nombre" required />
    </label>
    <input type="submit" value="Valider">
</form>

<?php
// Si l'utilisateur a fait une saisie dans le formulaire
if (!empty($_GET['nombre'])) {
    $saisie = (int)$_GET['nombre'];

    echo "<hr>";
    echo "Version boucle :<br />";
    echo "La factorielle de " . $saisie . " = " . factorielleVersionBoucle($saisie);
    echo "<br /><hr>";

    echo "Version récursive :<br />";
    echo "La factorielle de " . $saisie . " = " . factorielleVersionRecursive($saisie);
    echo "<br /><hr>";
}

function factorielleVersionBoucle($factorielle) {
    $resultat = 1;
    for ($i = 1; $i <= $factorielle; $i++) {
        $resultat *= $i;
    }
    return $resultat;
}

function factorielleVersionRecursive($factorielle) {
    if ($factorielle <= 1) {
        return 1;
    }

    return $factorielle * factorielleVersionRecursive($factorielle - 1);
}
?>
</body>
</html>
