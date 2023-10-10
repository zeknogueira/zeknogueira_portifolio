<?php
require_once "conection.php";

$email = $POST["email"];
$user_password = $POST["password"];
$query_verify_login_sql = " SELECT * FROM users WHERE user_email = '$email' AND user_password = '$user_password'";
$result = ($conection_db>query($query_verify_login_sql));
if($result->num_rows == 1){   
    header("Location: blog.php");
    exit();
} else{
    header("Location: login.php?error=1");
    exit();
}

?>