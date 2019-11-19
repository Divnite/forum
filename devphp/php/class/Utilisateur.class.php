<?php

class Utilisateur{
    
    public $id;
    public $nom;
    public $prenom;
    public $mail;
    public $nb_connection;
    public $last_connection_date;
    public $param;
    

    public function __construct($utilisateur,$motdepasse){

        $connexion= new DB();
        $param=array($utilisateur,$motdepasse);
        $res = $connexion->LoadData("SELECT * FROM utilisateurs WHERE username=? AND password=?",$param);
        $this->id=$res[0];
        $this->nom=$res[1];
        $this->prenom=$res[2];
        $this->mail=$res[3];
        $this->nb_connexion=$res[4];
        $this->last_connexion=$res[5];
        echo($this->nom);

    }



    function signup(){

    }


    function set_nb_connection($nb_connection){

        $nb_connection++;

    }

    /*function set_last_connection_date($last_connection_date){

        $this.last_connection_date=date('l jS \of F Y h:i:s A');

    }*/


}



?>