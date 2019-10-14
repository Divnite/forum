<?php
echo"<form action='execution.php' method='post'>";
echo"<label for='POST-name'>Username :</label>";
echo  "<input id='POST-name' type='text' name='name'>";
echo  "<label for='POST-mdp'>Password :</label>";
echo  "<input id='POST-mdp' type='text' name='mdp'>";
echo  "<input type='submit' value='Enregistrer'>";
echo"</form>";
?>