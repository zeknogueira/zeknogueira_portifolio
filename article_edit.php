<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once "conection.php"
    ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Zek Nogueira</title>
</head>

<body class="white_body_blog">
    <header id="small_header">
        <div id="logo_blog">
            <a href="index.php">
                <h1>ZEK<span id="zek_logo_blog">/Blog</span></h1>
            </a>
        </div>


        <div id="menu">

            <nav id="principal_nav">
                <a href="login.php"><button class="login_button">Login</button></a>
                <a href="blog.php">Blog</a>
                <a href="contato.html">Contato</a>
                <a href="Projetos">Projetos</a>
                <a href="curriculo.html">Curriculo</a>
            </nav>
        </div>

    </header>
    <main class="admin_white_main">
        <div class="admin_principal_white_background_form">
            <h1>Editar Artigo</h1>
            <section>

                <?php require "conection.php";
                $article_id_send = $_GET['article_id'];
                $sql = "SELECT * FROM articles WHERE article_id = ?";
                $stmt = $conection_db->prepare($sql);
                $stmt->bind_param("s", $article_id_send);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $row_a = $result->fetch_assoc();
                } ?>
                <form class="form_admin" action="article_edit_process.php" method="POST">

                    <label for="article_name">Nome</label>
                    <input type="text" id="article_name" name="article_name"
                        placeholder="<?php echo $row_a['article_name']; ?>"
                        value="<?php echo $row_a['article_name']; ?>" required>


                    <label for="article_description">Descrição</label>
                    <input type="text" id="article_description" name="article_description"
                        placeholder="<?php echo $row_a['article_description']; ?>"
                        value="<?php echo $row_a['article_description']; ?>" required>
                    <label for="article_categories_options"></label>

                    <select name="article_categories_options" id="article_categories_options">
                        <option value="informatica">Informática</option>
                        <option value="educacao" autofocus>Educação</option>
                        <option value="marketing">Marketing</option>
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

    <footer id="footer_blog_principal">
        <div>
            <p>2023 &#169; Todos os direitos reservados | Desenvolvido por <a href="index.php">Zek Nogueira</a></p>
        </div>

    </footer>

</body>

</html>