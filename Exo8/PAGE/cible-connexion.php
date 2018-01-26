<?php session_start();
 ?>

<?php
require_once("./getbdd.php"); // J'appelle ma page getbdd

if(isset($_POST['connexion'])){ // Je détermine si la variable est définie et est différente de NULL.
  if(!empty($_POST['pseudo']) && !empty ($_POST['pass'])){ // Si pseudo et mdp ne sont pas vides
    $pseudo = htmlspecialchars($_POST['pseudo']); // La variable pseudo est égale à chaîne de caractères
    $pass = $_POST['pass']; // La variable pass est égale à la valeur du champ pass de la bdd

    $sql = 'SELECT * FROM membres_rose_prevost WHERE pseudo = "'.$pseudo.'"'; // Requête pour sélectionner tous les pseudos de la table
    $req = $bdd->query($sql); // Je fais une requête vers la bdd

    $count = $req->rowCount(); // Je retourne le nombre de résultats de ma requête
    if($count == 1){ // Si le nbr de résultat est égal à 1
      $result = $req->fetch(PDO::FETCH_ASSOC); // Je écupère la ligne suivante d'un jeu de résultats PDO
      if(password_verify($pass, $result['pass'])){ // Je vérifie que le hachage fourni correspond bien au mot de passe fourni
        $_SESSION['connexion_msg'] = "ok";
        $_SESSION['user_pseudo'] = $pseudo;
        $_SESSION['user_id'] = $result['id'];
      }else{ // Sinon
        $_SESSION['connexion_msg'] = "error0 : ".$count."//".$sql; // Je mets un message d'erreur
      }
    }else{
      $_SESSION['connexion_msg'] = "error1 : ".$count."//".$sql;
    }
  }else{
      $_SESSION['connexion_msg'] = "error2";
  }
}else{
  $_SESSION['connexion_msg'] = "";
}
header('location:../index.php'); // Redirection automatique vers la page index

?>
