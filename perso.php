<?php

include 'config.php';

$query = $pdo->query('SELECT id, nom, image, nb_word, classement FROM personnages WHERE classement<19');
$persoWord= $query->fetchAll();

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
   <img class="barreJaune" src="images/GRAPHEFOND/RectangleJAUNE.png">
   <div class="btnList">
   <a href="#" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/RELATIONS-B.png"></a>
   <a href="#" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSNOIR/TALKTHEMOST-N.png"></a>
   <a href="#" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/MOSTVIEWED-B.png"></a>
   <a href="#" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/AGE-B.png"></a>
   <a href="#" class="btnLink"><img src="images/GRAPHEFOND/BOUTONSBLANC/LIEUX-B.png"></a>
   </div>
  
   <?php foreach($persoWord as $_perso) : ?>
    <div class="bulleContainer">
      <img class="bubulle" src="images/GRAPHEFOND/bubble.png" id="bubble<?= $_perso->classement ?>">
    </div>
   <div style="width:<?= 210 - $_perso->classement * 10 ?>px; height:<?= 210 - $_perso->classement * 10 ?>px;" class="persoContainer" id="bulle<?= $_perso->classement ?>">
    <img class="persoBulle" src="<?= $_perso->image ?>">
   </div>

   <?php endforeach ?>


<!-- 
    <script src="scripts/perso.js"></script> -->
  </body>
</html>