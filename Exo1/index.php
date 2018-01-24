<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>
  <body>
    <!-- Écrire un programme PHP qui affiche tous les nombres impairs entre 0 et 1000, par
ordre croissant : « 1 3 5 7 ... 995 997 999 ». -->
    <?php
    function impair($num) // fonction impair de la variable "num"
    {
     if($num % 2 != 0) // Si le nombre est impair
     {
      return true; // On retourne true
     }
     return false; // Sinon on retourne false
    }

    for($i= 0; $i <= 1000; $i++) // Boucle for pour afficher jusqu'à 1000
    {
     if(impair($i)) // Si le nombre est impair
     {
      echo $i; //  On l'affiche
      echo '<br/>'; // Retour à la ligne de chaque nombre impair affiché
     }
    }
    ?>
  </body>
</html>
