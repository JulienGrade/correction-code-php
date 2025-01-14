<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
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
        .message {
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
<h1>Vérification de nombre</h1>

<?php
session_start();
if (empty($_SESSION['nbEssais'])) {
    $_SESSION['nbEssais'] = 0;
}
?>

<form method="post" action="">
    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre" id="nombre" />
    <input type="submit" value="Valider">
</form>

<?php
if (!empty($_POST['nombre'])) {
    $nombreSaisi = $_POST['nombre'];

    ++$_SESSION['nbEssais'];
    if ($_SESSION['nbEssais'] > 1) {
        echo "<div class='message success'>Essai numéro " . $_SESSION['nbEssais'] . "</div>";
    }

    if ($nombreSaisi % 2 !== 0) {
        echo "<div class='message error'>Le nombre n'est pas pair !</div>";
    }

    if ($nombreSaisi % 3 !== 0) {
        echo "<div class='message error'>Le nombre n'est pas divisible par 3 !</div>";
    }

    if ($nombreSaisi % 2 === 0 && $nombreSaisi % 3 === 0) {
        echo "<div class='message success'>Le nombre " . $nombreSaisi . " est divisible par 2 et par 3.</div>";
        session_destroy();
    }
}
?>
</body>
</html>
