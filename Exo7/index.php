<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 7</title>
  </head>
  <body>

<!-- Écrire un formulaire qui demande le nom et le sexe de l&#39;utilisateur (M ou Mme). Ce
formulaire appelle une page qui affichera « Bonjour monsieur Truc » ou « Bonjour
madame Bidule » suivant le cas. -->

    <form method="post" action="PAGE/cible.php">
    <p>
      <input type="text" name="prenom" />
      <input type="radio" name="sex" value="M" /> Homme
      <input type="radio" name="sex" value="F" /> Femme
      <input type="submit" value="Valider" />
    </p>
    </form>
  </body>
</html>
