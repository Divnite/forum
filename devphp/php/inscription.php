<?php

require 'class/DB.class.php';
require 'class/Utilisateur.class.php';

$user=new Utilisateur();
$user->signup($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['username1'],$_POST['password1']);
echo $_POST['username1'].$_POST['password1'];

?>
