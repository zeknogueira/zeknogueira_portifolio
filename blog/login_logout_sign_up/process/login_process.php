<?php
session_start();
require_once "../../config/conection.php";

$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];
$query_verify_login_sql = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'";
$result = $conection_db->query($query_verify_login_sql);
if ($result->num_rows == 1) {
    $row_login = $result->fetch_assoc();
    $_SESSION['user_id'] = $row_login["user_id"];
    $_SESSION['user_name'] = $row_login["user_name"];
    $_SESSION['user_email'] = $row_login["user_email"];
    

    
    if ($row_login["user_admin"] == 1) {
        header("Location:../../admin/admin.php");
        
        exit();
    } else {
        header("Location:../user/blog.php");
        exit();
    }
    exit();
}
else {
    header("Location: ../login.php?error=1");
    
    exit();
}

?>