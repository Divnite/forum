<!DOCTYPE html>
<html>
    <head>
        <title>Forum</title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <link type="text/css" rel="stylesheet" href="css/styles.css" /> 
    </head>
    
    <header>
        <img id="logo" src="img/logo.png">
        <img src="https://img.icons8.com/ios-filled/50/000000/name.png">

    </header>


    <body>

    <input type="button" value="New Topic">

        <?php
            echo"<form action='execution.php' method='post'>";
            echo"<label for='POST-name'>Username :</label>";
            echo  "<input id='POST-name' type='text' name='name'>";
            echo  "<label for='POST-mdp'>Password :</label>";
            echo  "<input id='POST-mdp' type='text' name='mdp'>";
            echo  "<input type='submit' value='Enregistrer'>";
            echo"</form>";
        ?>

    </body>
    
    <footer>

    </footer>
</html>






