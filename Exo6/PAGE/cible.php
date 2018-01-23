<?php
  // Test si le fichier a bien été envoyé et s'il n'y a pas d'erreur
  if (isset($_FILES['prenom']) AND $_FILES['age']['error'] == 0)
  {
    echo "prenom";
  }
?>
<p>Je peux prédire que tu t’appelles : <?php echo $_POST['prenom']; ?> !</p>
<p>Je peux prédire que tu as : <?php echo $_POST['age']; ?> ans !</p>
