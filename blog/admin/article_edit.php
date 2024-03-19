<!DOCTYPE html>
<html lang="pt-br">
<?php
require "../config/conection.php"
    ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Zek Nogueira</title>
</head>

<body class="white_body_blog">
    <?php include "../elements/header_pattern.php" ?>
    <main class="admin_white_main">
        <div class="admin_principal_white_background_form">
            <h1>Editar Artigo</h1>
            <section>

                <?php
                $article_id_send = $_GET['article_id'];
                $sql = "SELECT * FROM articles WHERE article_id = ?";
                $stmt = $conection_db->prepare($sql);
                $stmt->bind_param("s", $article_id_send);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $row_a = $result->fetch_assoc();
                } ?>
                <form class="form_admin" action="process/article_edit_process.php" method="POST">

                    <label for="article_name">Nome</label>
                    <input type="text" id="article_name" name="article_name"
                        placeholder="<?php echo $row_a['article_name']; ?>"
                        value="<?php echo $row_a['article_name']; ?>" required>


                    <label for="article_description">Descrição</label>
                    <input type="text" id="article_description" name="article_description"
                        placeholder="<?php echo $row_a['article_description']; ?>"
                        value="<?php echo $row_a['article_description']; ?>" required>
                    <label for="article_categories_options">Categoria:</label>

                    <select name="articles_categories_options">
                        <option value="Informática">Programação</option>
                        <option value="Música">Música</option>
                        <option value="Marketing">Marketing</option>
                    </select>

                    <label for="article_content_text_area">Conteúdo</label>
                    <textarea name="article_content_text_area" class="article_content_text_area" cols="30" rows="20"
                        placeholder="<?php echo $row_a['article_content']; ?>">
                    <?php echo $row_a['article_content']; ?>
                    </textarea>

                    <input type="hidden" name="article_id" value="<?php echo $row_a['article_id']; ?>">
                    <div class="button_submit_box">
                        <input type="submit" name="editar" class="button_submit_blog_login_sign_up"
                            value="Editar Artigo" />
                    </div>
                </form>
            </section>

        </div>


    </main>

   <?php include "../elements/footer_pattern.php" ?>

</body>

</html>