<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 6</title>
  </head>
  <body>

<!-- Écrire un formulaire qui demande le nom et l&#39;âge de l&#39;utilisateur. Le bouton submit
de ce formulaire provoquera l&#39;affichage d&#39;une page qui saluera l&#39;utilisateur avec
cette phrase : « Bonjour machin, vous avez xx ans... » (avec les bonnes valeurs,
bien entendu). -->

    <form method="post" action="PAGE/cible.php">
    <p>
      <input type="text" name="prenom" />
      <input type="number" name="age" value="">
      <input type="submit" value="Valider" />
    </p>
    </form>
  </body>
</html>
