<?php
$host = "localhost";
$user = "root";
$pass = "";
$dname = "gestemployes";

//verification de la connexion avec la base
$conn = mysqli_connect($host,$user,$pass,$dname);

if (!$conn){ //chaine de connexion
    echo "connexion Incorrect!";
}


?>