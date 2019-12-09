<?php

class DB{

    public $connexion;
    public $bddname = 'mysql:host=localhost;dbname=forumDB';
	public $username = 'root';
	public $password = '';


    public function __construct(){

        $this->connexion = new PDO($this->bddname,$this->username,$this->password);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    function connexion($id){
        session_start();
        $_SESSION['id']=$id;
    }


    public function deconnexion(){

        session_destroy();

    }

    public function LoadDataValue($request,$param=null){

        $req=$this->connexion->prepare($request);
        $res=$req->execute($param);
        
    }

    public function LoadDataVoid($request,$param=null){

        $req=$this->connexion->prepare($request);
        $res=$req->execute($param);
        
    }


    /*public function return_void(){

    }

    public function return_value($req){

        $result = $req->fetchAll();
        print_r($result);

    }*/


}


?>