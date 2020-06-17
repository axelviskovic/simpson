<?php 

  include_once 'config.php';

  $query = $pdo->query('SELECT id, nom, description, image FROM personnages');
  $personnages = $query->fetchAll();

?>



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Simpson</title>
    <meta name="description" content="description de la page"/>
    <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
  </head>
  <body>

    <div class="loaderContainer">
      <img class="backgroundLoader" src="images/background.png">
      <img class="donutLoader" src="images/donutLoader.png">
      <h1 class="txtLoader">Loading...</h1>
    </div>

    <!-- MAP / LIEUX -->
    <img id="backgroundMap" src="images/map/MAPDEBASE.png">
    <a href="lieux.php?id=6"><img id="ecole" src="images/lieux/ECOLE.png"></a>
    <a href="lieux.php?id=17"><img id="android" src="images/lieux/ANDROID.png"></a>
    <a href="lieux.php?id=20"><img id="skinner" src="images/lieux/SKINNER.png"></a>
    <img id="bowling" src="images/lieux/BOWLING.png">
    <a href="lieux.php?id=15"><img id="centrale" src="images/lieux/CENTRALE.png"></a>
    <a href="lieux.php?id=11"><img id="studio" src="images/lieux/STUDIO.png"></a>
    <img id="donuts" src="images/lieux/DONUTS.png">
    <a href="lieux.php?id=19"><img id="duff" src="images/lieux/DUFF.png"></a>
    <a href="lieux.php?id=25"><img id="eglise" src="images/lieux/EGLISE.png"></a>
    <a href="lieux.php?id=10"><img id="ferme" src="images/lieux/FERME.png"></a>
    <a href="lieux.php?id=1"> <img id="simpson" src="images/lieux/SIMPSON.png"></a>
    <a href="lieux.php?id=9"><img id="flanders" src="images/lieux/FLANDERS.png"></a>
    <a href="lieux.php?id=26"><img id="poisson" src="images/lieux/POISSON.png"></a>
    <a href="lieux.php?id=23"><img id="hopital" src="images/lieux/HOPITAL.png"></a>
    <a href="lieux.php?id=7"><img id="burger" src="images/lieux/BURGER.png"></a>
    <a href="lieux.php?id=24"><img id="luigi" src="images/lieux/LUIGI.png"></a>
    <img id="mairie" src="images/lieux/MAIRIE.png">
    <img id="frink" src="images/lieux/FRINK.png">
    <img id="mall" src="images/lieux/MALL.png">
    <img id="manoir" src="images/lieux/MANOIR.png">
    <img id="minimarket" src="images/lieux/MINIMARKET.png">
    <img id="moe" src="images/lieux/MOE.png">
    <img id="nelson" src="images/lieux/NELSON.png">
    <img id="police" src="images/lieux/POLICE.png">
    <img id="retraite" src="images/lieux/RETRAITE.png">
    <img id="selma" src="images/lieux/SELMA.png">


    <script src="scripts/main.js"></script>
  </body>
</html>
