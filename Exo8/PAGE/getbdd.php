<?php
try
{ // Je fais la liaison avec ma base de données
  $bdd = new PDO('mysql:host=localhost;dbname=espace-connexion;charset=utf8', 'root', 'root',
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

} catch (PDOException $e) { // Je vérifie et si tout ne fonctionne pas comme prévu, j'affiche une messge d'erreur
echo 'Échec lors de la connexion : ' . $e->getMessage();
}
?>
