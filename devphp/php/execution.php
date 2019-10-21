<?php

require 'class/DB.class.php';
require 'class/Utilisateur.class.php';

$user=new Utilisateur($_POST['Username'],$_POST['Password']);


?>
