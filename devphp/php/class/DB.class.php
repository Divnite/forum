<?php

require 'dbconfig.php';

class DB{

    public $connexion;


    public function __construct($bddname,$username,$password){

        $this->connexion = new PDO($bddname,$username,$password);

    }


    public function deconnexion(){

        $dbh=null;

    }

    public function LoadData($request,$param){

        $req=$DB->prepare($request,$param=null);
        $res=$req->execute();
        return res;

    }


    public function return_void(){

    }

    public function return_value(){

    }


}






?>