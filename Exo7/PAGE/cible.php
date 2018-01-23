<?php
  // Test si le fichier a bien été envoyé et s'il n'y a pas d'erreur

  if (!empty($_POST['prenom']) && !empty($_POST['sex']))
  {
    $sex = $_POST['sex'];
    $prenom = $_POST['prenom'];
    
  if ($sex=="M") {
      echo "Bonjour Monsieur " .$prenom. " !";
    } else {
      echo "Bonjour Madame " .$prenom. " !";
    }
  }
?>
