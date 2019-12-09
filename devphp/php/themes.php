<?php

require 'class/DB.class.php';
require 'class/Theme.class.php';


$Theme=new Theme();
$Theme->ajoutTheme($_POST['Titre']);




?>