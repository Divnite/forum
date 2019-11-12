<!DOCTYPE html>
<html>
    <head>
        <title>Forum</title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <link type="text/css" rel="stylesheet" href="css/styles.css" /> 
    </head>
    
    <header>
        <div id='banner'></div>
        <img src="img/logo.png">



    </header>


    <body>

        <?php
            echo"<form action='php/execution.php' method='post'>";
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






