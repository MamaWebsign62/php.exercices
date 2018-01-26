<?php require_once("PAGE/header.php"); ?>

<!-- Espace d'inscription -->
<form class="form-inscription" action="" method="post">
  <p>Inscivez-vous !!!</p>
  <input type="text" name="pseudo" value="" placeholder="Créez un pseudo" />
  <input type="password" name="pass" value="" placeholder="Créez un mot de passe" />
  <input type="password" name="pass2" value="" placeholder="Vérifiez votre mot de passe" />
  <input type="text" name="email" value="" placeholder="Saississez votre adresse mail" />
  <input class="envoyer" type="submit" name="envoyer" value="Envoyer" />
</form>

<?php
if(isset($_POST['envoyer'])){ // Si ça existe...
  if(!empty($_POST['pseudo']) AND !empty($_POST['pass']) AND !empty($_POST['pass2']) AND !empty($_POST['email'])) { // Si les champs suivants ne sont pas vides
  	$pseudo =  $_POST['pseudo']; // champ pseudo
  	$pass = $_POST['pass']; // champ mot de pass
  	$pass2 = $_POST['pass2']; // champ mot de passe de confirmation
    $email = $_POST['email']; // champ email
    if($pass == $pass2) { // Si le mot de pass est égal au mot de passe de confiramtion

      if(True){ // Si c'est vrai
          // emailaddress is valid
          $pass = password_hash($pass, PASSWORD_DEFAULT); // Cryptage du mot de passe
          require_once('./PAGE/getbdd.php'); // Je rappelle ma page getbdd.php
          $sql = "INSERT INTO `membres_rose_prevost`  VALUES(NULL,'".$pseudo."','".$pass."','".$email."','".date("Y-m-d")."')"; // Requête sql pour insérer toutes les nouvelles données d'inscription
          $bdd->query($sql) or die(print_r($bdd->errorInfo())); // Je crée ma requête sql ou je vérifie une éventuelle erreur
      }
      else { // Sinon
        echo '<p>Votre adresse mail n\'est pas valide !</p>'; // J'affiche mail non valide
      }
    }
    else { // Sinon...
      echo '<p>Vos mots de passe sont différents !</p>'; // Affichage du message mdp différents
    }
  }else{ // Sinon...
    echo '<p>Vous devez remplir correctement tous les champs</p>'; // Affichage message remplir champs
  }
}
?>

<?php require_once("PAGE/footer.php"); ?>
