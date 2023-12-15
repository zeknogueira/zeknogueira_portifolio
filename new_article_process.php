<?php
require_once "conection.php";

// ...
$article_name = $_POST["article_name"];
$article_description = $_POST["article_description"];

$sql = "INSERT into articles (article_name, article_description) values (?,?)";

$stmt = $conection_db->prepare($sql);
if ($stmt) {
    $stmt->bind_param("ss", $article_name, $article_description);
    
    if ($stmt->execute()) {
        $stmt->close();
        $conection_db->close();
        
        header("Location: admin.php");
        exit(); 
    } else {
        
        $stmt->close();
        $conection_db->close();
        
        header("Location: new_article.php?erro=1&article_name=$article_name");
        exit();
    }
} else {
     $conection_db->close();
    
    header("Location: new_article.php?erro=2&article_name=$article_name");
    exit();
}
?>