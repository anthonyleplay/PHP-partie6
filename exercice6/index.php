<?php
    if (isset($_GET['building'])){
        $messageBuilding =  $_GET['building'];
    }else {
        $messageBuilding = 'il n\'y a pas de parametre d\'URL \'building\'';
    };
    if (isset($_GET['room'])){
        $messageRoom = $_GET['room'];
    }else {
        $messageRoom = 'il n\'y a pas de parametre d\'URL \'room\'';
    };
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>

<body>
    <h1>Exercice 6</h1>

    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher :<br>
    <b>index.php?building=12&room=101</b></p>
     
    <a href="index.php?building=12&room=101"><span style="background-color: lightgreen;">TEST GET</span></a> <br><br>

    <a href="index.php"><span style="background-color: lightblue;">Reboot</span></a>

    <p>===================================</p>

    <p><?= $messageBuilding ?> </p>
    <p><?= $messageRoom ?> </p>

</body>

</html>