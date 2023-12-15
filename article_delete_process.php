<?php
require "conection.php";
$sql = "DELETE from articles where article_id = ?";
$article_id_send = $_POST["article_id"];

$stmt = $conection_db->prepare($sql);
if ($stmt) {
    $stmt->bind_param("s", $article_id_send);
    if ($stmt->execute()) {
        $stmt->close();
        $conection_db->close();
        header("Location: admin.php");
        exit();

    } else {

        $stmt->close();
        $conection_db->close();

        header("Location: admin.php?erro=1&article_id=$article_id_send");
        exit();
    }
} else {
    $conection_db->close();

    header("Location: admin.php?erro=2&article_id=$article_id_send");
    exit();
}
?>