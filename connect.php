<?php

$host = "localhost";
$user =  "root";
$password = "aU912bgY,r";
$dbname = "url_shortner";

$mysqli = new mysqli($host, $user, $password, $dbname);

if ($mysqli->connect_errno){
    die("Falha na conexão: (" . $mysqli->connect_errno . ") ". $mysqli->connect_error);
}



?>