<?php
require_once "conection.php";

// ...
$article_name = $_POST["article_name"];
$article_description = $_POST["article_description"];
$article_id_send = $_POST["article_id"];

$sql = "UPDATE articles SET article_name = ?, article_description = ? WHERE article_id = ?";

$stmt = $conection_db->prepare($sql);
if ($stmt) {
    $stmt->bind_param("ssi", $article_name, $article_description, $article_id_send);
    
    if ($stmt->execute()) {
        $stmt->close();
        $conection_db->close();
        
        header("Location: admin.php");
        exit(); 
    } else {
        
        $stmt->close();
        $conection_db->close();
        
        header("Location: article_edit.php?erro=1&article_id=$article_id_send");
        exit();
    }
} else {
     $conection_db->close();
    
    header("Location: article_edit.php?erro=2&article_id=$article_id_send");
    exit();
}
?>