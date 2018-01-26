<?php
session_start(); // Je récupère ma session
session_destroy(); // Je détruits ma session
header('location:../index.php'); // Je retourne à ma page de connexion initiale
?>
