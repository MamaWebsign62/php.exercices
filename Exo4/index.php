<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 4</title>
  </head>
  <body>

    <!-- Ecrire un programme qui calcule la factorielle de n.
    Variable n = 8
    1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 -->

    <?php
    $result = 1;
    $i = 1; //compteur
    $n = 8;
      while ($i <= $n) { // Je commence ma boucle tant que i est plus petit ou égal à n
        $result = $result * $i; // On rajoute resultat * i au resultat
        $i++; //J'incrémente pour qu'il aille jusquà 10
      }
      echo $result;
    ?>
  </body>
</html>
