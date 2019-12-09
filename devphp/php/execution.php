<?php

require 'class/DB.class.php';
require 'class/Utilisateur.class.php';

$user=new Utilisateur();
$user->verifconnexion($_POST['username'],$_POST['password']);
$user->set_nb_connexion($_SESSION["id"]);

echo($_SESSION["id"]);
?>


