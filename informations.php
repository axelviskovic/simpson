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


  </body>
</html>
