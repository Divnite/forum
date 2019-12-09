<?php

class Theme{

    public $id;
    public $titre;
    public $param;


    function __construct(){


    }



    function ajoutTheme($titre){

        $connexion= new DB();
        $param=array($titre);
        $res = $connexion->LoadDataVoid("INSERT INTO Themes (titre) VALUES (?) ",$param);

    }
    
}


?>