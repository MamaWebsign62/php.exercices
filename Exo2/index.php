<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>

    <!-- Écrire un programme qui écrit 500 fois « Je ne dois pas oublier de signer la feuille
    de présence. » -->

    <?php
      $nombre_de_lignes = 1;
      while ($nombre_de_lignes <= 500) // Boucle pour afficher 500 fois le message
      {
          echo 'Je ne dois pas oublier de signer la feuille de présence !<br>'; // Message affiché
          $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
      }
    ?>
  </body>
</html>
