<?php
require_once "conection.php";

$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];
$query_verify_login_sql = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'";
$result = $conection_db->query($query_verify_login_sql);
if ($result->num_rows == 1) {
    header("Location: blog.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}

?>