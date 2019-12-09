<?php

class Utilisateur{
    
    public $id;
    public $nom;
    public $prenom;
    public $mail;
    public $nb_connection;
    public $last_connection_date;
    public $param;
    


    function __construct(){


    }


    function verifconnexion($utilisateur,$motdepasse){

        $connexion= new DB();
        $param=array($utilisateur,$motdepasse);
        $res = $connexion->LoadDataValue("SELECT * FROM utilisateurs WHERE username=? AND password=?",$param);
        $this->id=$res[0];
        $this->nom=$res[1];
        $this->prenom=$res[2];
        $this->mail=$res[3];
        $this->nb_connexion=$res[4];
        $this->last_connexion=$res[5];
        $connexion->connexion($this->id);
    }



    function signup($nom,$prenom,$mail,$user,$password){

        $connexion= new DB();
        $param=array($nom,$prenom,$mail,$user,$password);
        echo $nom.$prenom.$mail.$user.$password;
        $res = $connexion->LoadDataVoid("INSERT INTO utilisateurs (nom,prenom,mail,username,password) VALUES (?,?,?,?,?)",$param);
        echo("action réussie");

    }


    function set_nb_connexion($id){

        $connexion= new DB();
        $param=array($id);
        $res = $connexion->LoadDataVoid("UPDATE utilisateurs SET nb_connexion=nb_connexion+1 WHERE id=?",$param);

    }

    /*function set_last_connection_date($last_connection_date){

        $this.last_connection_date=date('l jS \of F Y h:i:s A');

    }*/


}



?>