<?php
require "../../config/conection.php";

// ...
$article_name = $_POST["article_name"];
$article_description = $_POST["article_description"];
$article_content = $_POST["article_content_text_area"];
$article_category = $_POST["articles_categories_options"];


$sql = "INSERT into articles (article_name, article_description, article_content, article_category) values (?,?,?,?)";

$stmt = $conection_db->prepare($sql);
if ($stmt) {
    $stmt->bind_param("ssss", $article_name, $article_description, $article_content, $article_category);
    
    if ($stmt->execute()) {
        $stmt->close();
        $conection_db->close();
        
        header("Location: ../admin.php");
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