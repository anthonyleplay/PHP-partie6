<?php
    if (isset($_GET['startDate'])){
        $messageStartDate =  $_GET['startDate'];
    }else {
        $messageStartDate = 'il n\'y a pas de parametre d\'URL \'startDate\'';
    };
    if (isset($_GET['endDate'])){
        $messageEndDate = $_GET['endDate'];
    }else {
        $messageEndDate = 'il n\'y a pas de parametre d\'URL \'endDate\'';
    };
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>

<body>
    <h1>Exercice 3</h1>

    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher :<br>
    <b>index.php?startDate=2/05/2016&endDate=27/11/2016</b></p>
   
    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016"><span style="background-color: lightgreen;">TEST GET</span></a> <br><br>

    <a href="index.php"><span style="background-color: lightblue;">Reboot</span></a>

    <p>===================================</p>

    <p><?= $messageStartDate ?> </p>
    <p><?= $messageEndDate ?> </p>

</body>

</html>