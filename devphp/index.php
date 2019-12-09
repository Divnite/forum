<!DOCTYPE html>
<html>
    <head>
        <title>Forum</title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <link type="text/css" rel="stylesheet" href="css/styles.css" /> 
    </head>
    
    <header>
        <div id='banner'>
        <img src="img/logo.png">
        </div>
        



    </header>


    <body>

        <?php

            echo"<form id='connexion' action='php/execution.php' method='POST'>";
            echo"<label for='POST-username'>Username :</label>";
            echo  "<input id='username' type='text' name='username'>";
            echo  "<label for='POST-password'>Password :</label>";
            echo  "<input id='password' type='text' name='password'>";
            echo  "<input type='submit' value='Enregistrer'>";
            echo"</form>";
            echo"<br>";
            echo"<form id='inscription' action='php/inscription.php' method='POST'>";
            echo"<label for='POST-nom'>Nom :</label>";
            echo  "<input id='nom' type='text' name='nom'>";
            echo"<label for='POST-prenom'>Prenom :</label>";
            echo  "<input id='prenom' type='text' name='prenom'>";
            echo"<label for='POST-mail'>Mail :</label>";
            echo  "<input id='mail' type='text' name='mail'>";
            echo"<label for='POST-username1'>Username :</label>";
            echo  "<input id='username1' type='text' name='username'>";
            echo  "<label for='POST-password1'>Password :</label>";
            echo  "<input id='password1' type='text' name='password'>";
            echo  "<input type='submit' value='inscription'>";
            echo"</form>"; 
            echo"<br>";
            echo"<form id='ajouttheme' action='php/themes.php' method='POST'>";
            echo"<label for='POST-Titre'>Titre Theme :</label>";
            echo  "<input id='Titre' type='text' name='Titre'>";
            echo  "<input type='submit' value='Ajouter'>";
            echo"</form>";

        ?>



    </body>
    
    <footer>

    </footer>
</html>






