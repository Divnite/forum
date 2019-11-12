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
            echo"<form action='php/execution.php' method='POST'>";
            echo"<label for='POST-username'>Username :</label>";
            echo  "<input id='username' type='text' name='username'>";
            echo  "<label for='POST-password'>Password :</label>";
            echo  "<input id='password' type='text' name='password'>";
            echo  "<input type='submit' value='Enregistrer'>";
            echo"</form>";
        ?>

    </body>
    
    <footer>

    </footer>
</html>






