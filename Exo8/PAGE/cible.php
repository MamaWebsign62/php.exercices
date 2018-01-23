<?php
  // Test si les champs sont remplis

  // if (!empty($_POST['user_name']) && !empty($_POST['user_email']) && !empty($_POST['user_message']))
  // {
  //   $sex = $_POST['sex'];
  //   $prenom = $_POST['prenom'];
  //
  // if ($sex=="M") {
  //     echo "Bonjour Monsieur " .$prenom. " !";
  //   } else {
  //     echo "Bonjour Madame " .$prenom. " !";
  //   }
  // }
  //
  <?php
session_start();

if(isset($_POST['submit'])){

	if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['objet']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {

		$nom =  $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$to = 'mregnault.netgyver62@gmail.com';
		$subject = $_POST['objet'];
		$message = $_POST['message'];

		$headers = "MIME-Version: 1.0\r\n";
		//////ici on détermine le mail en format text
		$headers .= "Content-type:text/plain; charset=iso-8859-1\r\n";
		//////ici on détermine l'expéditeur et l'adresse de réponse
		$headers .= "From: $nom <$mail>\nX-Mailer:PHP";

		$envoi=mail($to, $subject, $message, $headers);
		if($envoi) echo '
		<div class="modal">
			<button type="button" id="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<h4>Merci '.$nom.','.$mail.'</h4>';
			echo '<p>J\'ai bien reçu le message suivant :</p><p>'.$message.'</p>
		</div>';
	}

	else {
		echo '<div class="modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<h4>Dommage '.$nom.','.$mail.', Essaye encore...</h4>';
		echo '<p>Vous devez remplir correctement tous les champs</p></div>';
	}

}

?>
?>
