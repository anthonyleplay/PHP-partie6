<?php
    if (isset($_GET['firstname']) && isset($_GET['lastname'])){
        $messageName =  $_GET['firstname'] . ' - ' .$_GET['lastname'];
    }else {
        $messageName = 'il n\'y a pas de parametre d\'URL \'lastname\' et \'firstname\'';
    };
    if (isset($_GET['age'])){
        $messageAge = $_GET['age'];
    }else {
        $messageAge = 'il n\'y a pas de parametre d\'URL \'age\'';
    };
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>

<body>
    <h1>Exercice 2</h1>

    <p>Faire une page index.php. Tester sur cette page que le paramètre <b>age</b> existe et si c'est le cas l'afficher sinon le signaler :<br>
    <b>index.php?lastname=Nemare&firstname=Jean</b></p>
   
    <a href="index.php?lastname=Nemare&firstname=Jean"><span style="background-color: lightgreen;">TEST GET</span></a> <br><br>
    <a href="index.php?lastname=Nemare&firstname=Jean&age=45"><span style="background-color: pink;">TEST GET (avec age)</span></a> <br><br>
    <a href="index.php"><span style="background-color: lightblue;">Reboot</span></a>

    <p>===================================</p>

    <p><?= $messageName ?> </p>
    <p><?= $messageAge ?> </p>

</body>

</html>