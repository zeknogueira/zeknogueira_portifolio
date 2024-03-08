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
        <div class="admin_principal_white_background_form_add">
            <h1>Adicionar Artigo</h1>
            <form class="form_admin" action="new_article_process.php" method="POST">

                <label for="article_name">Nome</label>
                <input type="text" id="article_name" name="article_name" placeholder="Nome do artigo" required>


                <label for="article_description">Descrição</label>
                <input type="text" id="article_description" name="article_description" placeholder="Descrição do Artigo"
                    required>

                <label for="article_categories_options">Categoria:</label>

                <select name="articles_categories_options">
                    <option value="Informática">Programação</option>
                    <option value="Música">Música</option>
                    <option value="Marketing">Marketing</option>
                </select>
                <label for="article_content">Contéudo</label>
                <textarea name="article_content_text_area" class="article_content_text_area" cols="30" rows="20"
                    placeholder="Conteúdo do Artigo">

                        </textarea>
                <div class="button_submit_box">
                    <input type="submit" name="add_article" class="button_submit_blog_login_sign_up"
                        value="Adicionar Artigo" />
                </div>
            </form>


        </div>


    </main>

    <footer id="footer_blog_principal">
        <div>
            <p>2023 &#169; Todos os direitos reservados | Desenvolvido por <a href="index.php">Zek Nogueira</a></p>
        </div>

    </footer>

</body>

</html>