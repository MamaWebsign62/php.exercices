<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>

<!-- Écrire un programme qui calcule la factorielle de 10.
Factorielle de 10 : 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10 -->

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
