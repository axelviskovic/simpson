<?php

include 'config.php';

$query = $pdo->query('SELECT id, nom, image, nb_appear, classement_appear FROM personnages WHERE classement_appear<19');
$persoAppear= $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Simpson</title>
    <meta name="description" content="description de la page"/>
    <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
    <link rel="stylesheet" href="styles/perso.css">
  </head>
  <body>

  <a href="index.php"><img class="flecheBack" src="../images/FLECHEGAUCHEJAUNE.png"></a>
    <h1 class="txtEnHaut">Personnages  qui  apparaissent  le  plus  souvent dans  la série</h1>

   <img class="barreJaune" src="images/GRAPHEFOND/RectangleJAUNE.png">
   <div class="btnList">
   <a href="#" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/RELATIONS-B.png"></a>
   <a href="perso.php" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/TALKTHEMOST-B.png"></a>
   <a href="apparition.php" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSNOIR/MOSTVIEWED-N.png"></a>
   <a href="#" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/AGE-B.png"></a>
   <a href="lieuxInfo.php" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/LIEUX-B.png"></a>
   </div>
  <div class="backgroundClick"></div>
   <?php foreach($persoAppear as $_perso) : ?>
    <div class="bulleContainer bubble<?= $_perso->classement_appear ?>">
      <h1 class="txtBubble"><span class="grey"><?= $_perso->classement_appear ?>ème</span> personnage le plus présent avec <span class="red"><?= $_perso->nb_appear ?></span> apparitions</h1>
      <img src="images/GRAPHEFOND/bubble.png" class="bubulle">
    </div>
   <div style="width:<?= 210 - $_perso->classement_appear * 10 ?>px; height:<?= 210 - $_perso->classement_appear * 10 ?>px;" class="persoContainer" id="bulle<?= $_perso->classement_appear ?>">
    <img class="persoBulle" src="<?= $_perso->image ?>">
   </div>

   <?php endforeach ?>



    <script src="scripts/perso.js"></script>
  </body>
</html>