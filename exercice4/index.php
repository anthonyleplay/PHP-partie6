<?php
    if (isset($_GET['language'])){
        $messagelanguage =  $_GET['language'];
    }else {
        $messagelanguage = 'il n\'y a pas de parametre d\'URL \'language\'';
    };
    if (isset($_GET['server'])){
        $messageserver = $_GET['server'];
    }else {
        $messageserver = 'il n\'y a pas de parametre d\'URL \'server\'';
    };
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>

<body>
    <h1>Exercice 4</h1>

    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher :<br>
    <b>index.php?language=PHP&server=LAMP</b></p>
     
    <a href="index.php?language=PHP&server=LAMP"><span style="background-color: lightgreen;">TEST GET</span></a> <br><br>

    <a href="index.php"><span style="background-color: lightblue;">Reboot</span></a>

    <p>===================================</p>

    <p><?= $messagelanguage ?> </p>
    <p><?= $messageserver ?> </p>

</body>

</html>