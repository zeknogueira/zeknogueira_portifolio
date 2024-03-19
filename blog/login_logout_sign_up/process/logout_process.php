<?php
require "../../config/conection.php";
session_start();
session_destroy();
header("Location:../../user/blog.php") 
?>