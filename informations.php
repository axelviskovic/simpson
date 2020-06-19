<?php 

  include_once 'config.php';

  $persoId = (int)$_GET['persoId'];

  $query = $pdo->query('SELECT id, nom, nom_complet, age, description, image, id_lieu, first_appear, year_appear, nb_appear, nb_word FROM personnages WHERE id='.$persoId);
  $persoData = $query->fetch();

  $query = $pdo->query('SELECT id, nom, image FROM lieux WHERE id='.$persoData->id_lieu);
  $lieuData = $query->fetch();

?>



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Simpson</title>
    <meta name="description" content="description de la page"/>
    <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
    <link rel="stylesheet" href="styles/informations.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>

      <img id="backgroundImg" src="<?= $lieuData->image ?>">

      <a href="lieux.php?id=<?= $lieuData->id ?>"><img id="closeBtn" src="images/CLOSE.svg"></a>

      <div class="persoContainer">
        <h1 class="nomPerso"><?= $persoData->nom ?></h1>
        <img class="imgPerso" src="<?= $persoData->image ?>">
      </div>
      <div class="blackContainer"></div>

      <div class="anecdotesContainer">
        <div class="presentationContainer">
          <h2 class="nomPersoAnecdotes"><?= $persoData->nom_complet ?></h2>
          <h2 class="agePersoAnecdotes"><?= $persoData->age ?> ans</h2>
          <div class="separation"></div>
        </div>
        <h2 class="titreSavoirPlus">Tu veux en savoir plus ?</h2> 
        <h3 class="txtAnecdote">Son vrai prénom serait soit Maurice ou Morris. Il est néerlandais, il est gaucher, et a un visa pour résider aux États-Unis. Il a aussi fait une école de coiffure mais s'en est fait exclure car il faisait des bêtises avec ses amis. Il éprouve une attirance secrète pour Marge. Tous les Noëls, Moe fait une traditionnelle tentative de suicide, qui échoue à chaque fois.</h3> 
        <a class="addAnecdote" href="#">
          <img class="btnAddAnecdote" src="images/add.svg">
          <h2 class="agePersoAnecdotes">Ajouter une anecdote</h2>
        </a>
      </div>
      <div class="statsContainer">
        <div class="presentationContainer">
          <h1 class="year"><?= $persoData->year_appear ?></h1>
          <h1 class="premiere">PREMIÈRE APPARITION</h1>
          <h3 class="apparition"><?= $persoData->first_appear ?></h3>
          <div class="separation"></div>
        </div>
        <div class="personnaliteContainer">
          <h1 class="personnalite">Personnalité</h1>
          <div class="sentimentContainer">
            <div class="negatif"> 
              <h1 class="percent">56%</h1>
              <h1 text-align="right" class="sentimentsTxt">Sentiments négatifs</h1>
            </div>
            <div class="blueBar"></div>
            <div class="redBar"></div>
            <div class="positif"> 
              <h1  class="sentimentsTxt">Sentiments positifs</h1>
              <h1 class="percent">44%</h1>
            </div>
          </div>
        </div>
        <div class="apparitionContainer">
          <h1 class="personnalite"></h1>
          <h1 id="apparuDans" class="simpsonFont">Est apparu dans</h1>
          <h1 id="nbEpisode">3<?= $persoData->nb_appear ?></h1>
          <h1 id="episodes" class="simpsonFont">episodes</h1>
          <h1 id="classementBavard"class="simpsonFont">6ème</h1>
          <h1 id="persoBavard"class="simpsonFont">personnage le<br>plus bavard avec</h1>
          <h1 id="totalMots"><?= $persoData->nb_word ?></h1>
          <h1 id="mots"class="simpsonFont">mots</h1>
        </div>
      </div>



  </body>
</html>
