<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>
  <body>
    <?php
    function impair($num)
    {
     if($num % 2 != 0) // Si le nombre est impair on retourne true
     {
      return true;
     }
     return false; // Sinon on retourne false
    }

    for($i= 0; $i <= 1000; $i++)
    {
     if(impair($i))
     { // Si le nombre est impair on l'affiche
      echo $i;
      echo '<br/>';
     }
    }
    ?>
  </body>
</html>
