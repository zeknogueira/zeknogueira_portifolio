<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zek_portifolio";

$conection_db = new mysqli($servername, $username, $password, $dbname)

if (conection_db->connect_error){
    die('Conexão falhou')
}


?>