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
    <link rel="stylesheet" href="css/login.css">
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
        <div class="admin_principal_white_background_table">
            <div class="title_admin">
                <h1>Artigos</h1>
                <form action="new_article.php" class="new_article_config">
                    <input type="submit" value="Novo Artigo">
                </form>
            </div>
            <table class="admin_table_global_config">
                <thead>
                    <th>ID</th>
                    <th>Título</th>
                    <th colspan="3">Descrição</th>
                </thead>
                <tbody>
                    <?php
                    require "conection.php";
                    $sql = "select * from articles";
                    $query_sql_select_articles = $conection_db->query($sql);
                    if ($query_sql_select_articles->num_rows > 0) {
                        while ($info_articles = $query_sql_select_articles->fetch_assoc()) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $info_articles["article_id"] ?>
                                </td>
                                <td>
                                    <?php echo $info_articles["article_name"] ?>
                                </td>
                                <td>
                                    <?php echo $info_articles["article_description"] ?>
                                </td>
                                <td>
                                    <form action="article_edit.php" method="GET">
                                        <input type="hidden" name="article_id"
                                            value="<?php echo $info_articles['article_id']; ?>">
                                        <input type="submit" class="botao-editar" value="Editar">
                                    </form>
                                </td>
                                <td>
                                    <form action="article_delete_process.php" method="POST">
                                        <input type="hidden" name="article_id"
                                            value="<?php echo $info_articles['article_id']; ?>">
                                        <input type="submit" class="botao-excluir" value="Excluir">
                                    </form>
                                </td>
                            </tr>
                            <?php

                        }
                    }
                  
                    ?>
                </tbody>
            </table>
        </div>


    </main>

    <footer id="footer_blog_principal">
        <div>
            <p>2023 &#169; Todos os direitos reservados | Desenvolvido por <a href="index.php">Zek Nogueira</a></p>
        </div>

    </footer>

</body>

</html>