<?php
    if (isset($_GET['week'])){
        $messageWeek =  $_GET['week'];
    }else {
        $messageWeek = 'il n\'y a pas de parametre d\'URL \'week\'';
    };

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>

<body>
    <h1>Exercice 5</h1>

    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher :<br>
    <b>index.php?week=12</b></p>
     
    <a href="index.php?week=12"><span style="background-color: lightgreen;">TEST GET</span></a> <br><br>

    <a href="index.php"><span style="background-color: lightblue;">Reboot</span></a>

    <p>===================================</p>

    <p><?= $messageWeek ?> </p>

</body>

</html>