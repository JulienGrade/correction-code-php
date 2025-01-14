<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur de Devises</title>
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
<h1>Convertisseur de Devises</h1>

<form method="post" action="">
    <label>Nombre (€)</label>
    <input type="text" name="nombre" style="width:50px" />
    <select name="devise" style="width:100px">
        <option value="Dollars">Dollars (US)</option>
        <option value="Roubles">Roubles (Russie)</option>
        <option value="Yuans">Yuans (Chine)</option>
        <option value="Livres">Livres (Royaume-Uni)</option>
    </select>
    <input type="submit" value="Valider">
</form>

<?php
const DOLLAR = 1.22;
const ROUBLE = 91.14;
const YUAN = 7.89;
const LIVRE = 0.89;

if (!empty($_POST['nombre'])) {
    $montantSaisi = (double)$_POST['nombre'];
    $devise = $_POST['devise'];

    $valeurConvertie = 0;
    switch ($devise) {
        case "$":
        case "Dollars":
            $valeurConvertie = DOLLAR * $montantSaisi;
            break;
        case "Roubles":
            $valeurConvertie = ROUBLE * $montantSaisi;
            break;
        case "Yuans":
            $valeurConvertie = YUAN * $montantSaisi;
            break;
        case "Livres":
            $valeurConvertie = LIVRE * $montantSaisi;
            break;
        default:
            echo "La devise choisie n'est pas prise en compte";
            break;
    }

    echo $montantSaisi . " € = " . $valeurConvertie . " " . $devise;
}
?>
</body>
</html>
