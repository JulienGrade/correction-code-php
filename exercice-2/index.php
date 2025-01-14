<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 2</title>
</head>
<body>
<?php
$alea = mt_rand(0,20);
echo "Nombre : ". $alea. "<br/>";
if($alea<7){
    echo "Bonjour";
}elseif ($alea<14){
    echo "Salut";
}else{
    echo "Hello";
}
?>
</body>
</html>