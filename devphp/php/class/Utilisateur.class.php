<?php

require 'DB.class.php';
require 'bdconfig.php';

class Utilisateur{
    
    public $id;
    public $nom;
    public $prenom;
    public $mail;
    public $nb_connection;
    public $last_connection_date;
    public $param;
    

    public function __construct($utilisateur,$motdepasse){

        if ($_POST['Username']=='vergnier' && $_POST['Password']=='bastien'){
        $connexion= new DB($bddname,$username,$password);
        $param=array($utilisateur,$motdepasse);
        $res = $connexion->LoadData("SELECT * FROM utilisateurs WHERE Username='?' AND Password='?' ",$param);
        $this->id=$res[0];
        $this->nom=$res[1];
        $this->prenom=$res[2];
        $this->mail=$res[3];
        }
        else{
            echo('Username/Password incorrect!');
        }

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