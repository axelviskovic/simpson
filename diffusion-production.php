<?php
    include './config.php';


    /*
    $query = $pdo->query('SELECT * FROM years');
    $years = $query->fetchAll();
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production et diffusion</title>
    <link href="./styles/diffusion-production.css" rel="stylesheet">
</head>
<body>
    <div class="production-diffusion">
        <div class="production">
            <a href="#"><img src="./images/map.jpg" alt="Voir la map"></a>
        </div>
        <div class="diffusion">
            <a href="diffusion.php"><img src="./images/saisons.jpg" alt="Voir les saisons"></a>
        </div>
    </div>
    <a href="index.php"><img src="./images/FLECHEGAUCHEJAUNE.png" alt="Ecran précédent" class="return"></a>
</body>
</html>