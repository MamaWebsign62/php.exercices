<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=espace-connexion;charset=utf8', 'root', 'root',
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

} catch (PDOException $e) {
echo 'Échec lors de la connexion : ' . $e->getMessage();
}
?>
