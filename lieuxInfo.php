<?php

include 'config.php';

$query = $pdo->query('SELECT id, nom, image, apparition, taux FROM lieux');
$lieux= $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Simpson</title>
    <meta name="description" content="description de la page"/>
    <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
    <link rel="stylesheet" href="styles/lieuxInfo.css">
  </head>
  <body>

  <img class="backgroundCloud" src="images/nuages.png">

  <a href="index.php"><img class="flecheBack" src="../images/FLECHEGAUCHEJAUNE.png"></a>
  <h1 class="txtEnHaut">Lieux qui apparaissent le plus tout au long de la série</h1>

  <img class="barreJaune" src="images/GRAPHEFOND/RectangleJAUNE.png">
   <div class="btnList">
   <a href="#" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/RELATIONS-B.png"></a>
   <a href="perso.php" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/TALKTHEMOST-B.png"></a>
   <a href="apparition.php" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/MOSTVIEWED-B.png"></a>
   <a href="#" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/AGE-B.png"></a>
   <a href="lieuxInfo.php" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSNOIR/LIEUX-N.png"></a>
   </div>

  <div class="lieuxContainer">

    <div class="lieu8"><img class="imgLieu" src="<?= $lieux[7]->image ?>"></div>
    <div class="lieu6"><img class="imgLieu" src="<?= $lieux[5]->image ?>"></div> 
    <div class="lieu15"><img class="imgLieu" src="<?= $lieux[14]->image ?>"></div>
    <div class="lieu16"><img class="imgLieu" src="<?= $lieux[15]->image ?>"></div>

    <div class="black black8"></div>
    <div class="black black6"></div>
    <div class="black black15"></div>

  </div>
  <div class="statContainer">

  </div>



    <script src="scripts/lieuxInfo.js"></script>
  </body>
</html>