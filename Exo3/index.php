<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>

    <?php
    $result = 1;
    $i = 1; //compteur
      while ($i <= 10) { // Je commence ma boucle tant que i est plus petit ou égal à 10
        $result = $result * $i; // On rajoute resultat * i au resultat
        $i++; //J'incrémente pour qu'il aille jusquà 10
      }
      echo $result;
    ?>

  </body>
</html>
