<?php
require_once "conection.php";

$user_name = $_POST["user_name"];
$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];
$confirm_user_password = $_POST["confirm_user_password"];
if ($user_password == $confirm_user_password) {
    $insert_user_in_db = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$user_name', '$user_email', '$user_password')";
    $result_insert_data = $conection_db->query($insert_user_in_db);

} else {
    header("Location:sing_up.php?error=1");
    exit();
}
if ($result_insert_data === TRUE) {
    header("Location:login.php");
    exit();
} else {
    header("Location:sign_up.php?error=2");
}

?>