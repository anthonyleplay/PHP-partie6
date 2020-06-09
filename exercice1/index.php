<?php
if (isset($_GET['firstname']) && isset($_GET['lastname'])){
    $message =  $_GET['firstname'] . ' - ' .$_GET['lastname'];
}else {
    $message = 'il n\'y a pas de parametre d\'URL  lastname et firstname';
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>

<body>
    <h1>Exercice 1</h1>

    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher :<br>
    <b>index.php?lastname=Nemare&firstname=Jean</b></p>
        
    <a href="index.php?lastname=Nemare&firstname=Jean"><span style="background-color: lightgreen;">TEST GET</span></a> <br><br>
    <a href="index.php"><span style="background-color: lightblue;">Reboot</span></a>

    <p>===================================</p>

    <p><?= $message ?> </p>

</body>

</html>