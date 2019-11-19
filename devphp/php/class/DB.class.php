<?php



class DB{

    public $connexion;
    public $bddname = 'mysql:host=localhost;dbname=forumDB';
	public $username = 'root';
	public $password = '';


    public function __construct(){

        $this->connexion = new PDO($this->bddname,$this->username,$this->password);

    }


    public function deconnexion(){

        $connexion=null;

    }

    public function LoadData($request,$param=null){

        $req=$this->connexion->prepare($request);
        $res=$req->execute($param);
        return $res;

    }


    public function return_void(){

    }

    public function return_value(){

    }


}


?>