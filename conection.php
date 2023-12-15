<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zek_blog_articles";

$conection_db = new mysqli($servername, $username, $password, $dbname);
$conection_db->query("SET NAMES 'utf8'");
