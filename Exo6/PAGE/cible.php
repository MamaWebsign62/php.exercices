

<?php
//Écrire un formulaire qui demande le nom et l'âge de l'utilisateur. Le bouton submit
// de ce formulaire provoquera l'affichage d'une page qui saluera l'utilisateur avec
// cette phrase : « Bonjour machin, vous avez xx ans... » (avec les bonnes valeurs,
// bien entendu).

  // Test si le fichier a bien été envoyé et s'il n'y a pas d'erreur
  if (isset($_FILES['prenom']) AND $_FILES['age']['error'] == 0)
  {
    echo "prenom"; // Affichage du prénom
  }
?>
<p>Je peux prédire que tu t’appelles : <?php echo $_POST['prenom']; ?> !</p> <!-- Affichage du texte et du prénom -->
<p>Je peux prédire que tu as : <?php echo $_POST['age']; ?> ans !</p> <!-- Affichage du texte et de l'âge -->
