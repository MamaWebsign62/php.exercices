<!-- Écrire un formulaire qui demande le nom et le sexe de l&#39;utilisateur (M ou Mme). Ce
formulaire appelle une page qui affichera « Bonjour monsieur Truc » ou « Bonjour
madame Bidule » suivant le cas. -->

<?php
  // Test si le fichier a bien été envoyé et s'il n'y a pas d'erreur

  if (!empty($_POST['prenom']) && !empty($_POST['sex']))  // Si les champs sont vides
  {
    $sex = $_POST['sex']; // Alors message demandant à remplir le champ "sex"
    $prenom = $_POST['prenom']; // Alors message demandant à remplir le champ "prenom"

  if ($sex=="M") { // Si le champ "Masculin" a été coché...
      echo "Bonjour Monsieur " .$prenom. " !"; // Apparition du message "Bonjour Monsieur"
    } else { // Sinon...
      echo "Bonjour Madame " .$prenom. " !"; //Apparition du message "Bonjour Madame"
    }
  }
?>
