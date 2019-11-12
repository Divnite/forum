<?php



class DB{

    public $connexion;
    public $bddname = 'psql:host=localhost;port=5432;dbname=forumDB';
	public $username = 'postgres';
	public $password = 'posgres';


    public function __construct(){

        $this->connexion = new PDO($this->bddname,$this->username,$this->password);

    }


    public function deconnexion(){

        $connexion=null;

    }

    public function LoadData($request,$param){

        $req=$connexion->prepare($request,$param=null);
        $res=$req->execute();
        return res;

    }


    public function return_void(){

    }

    public function return_value(){

    }


}


?>