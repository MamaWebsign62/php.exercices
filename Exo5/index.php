<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 5</title>
  </head>
  <body>

<!-- Écrire un programme qui affiche la table de multiplication de 13 et ses résultats. -->

    <?php
    $i = 13; // Création de la variable i = 13 (multiplicateur par 13)
    // j représente le nbr par lequel on multiplie 13 (soit i)
        Echo 'Table de multiplication de '.$i.'<br>'; // Affichage du message "Table de multiplication"
        for ($j = 1; $j <= 13; $j++) // On tourne en boucle tant que ma boucle = 1 et que j est inférieur ou = à 13
        {
            echo $i.' x '.$j.' = '.$i*$j.'<br>'; // J'affiche l'opération de chaque i * j et son résultat
        }
    ?>
  </body>
</html>
