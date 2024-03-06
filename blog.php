<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once "conection.php"
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Zek Nogueira</title>
</head>

<body class="white_body_blog">
    <header id="small_header">
        <div id="logo_blog">
            <a href="index.php">
                <h1>ZEK</h1>
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
    <main class="white_main_blog">
        <div id="space_between_header_articles">

        </div>
        <div class="main_blog_principal_box">
            <div class="main_blog_principal">
                <section class="articles_section">
                    <?php
                    require "conection.php";
                    $sql = "select * from articles";
                    $query_sql_select_articles = $conection_db->query($sql);
                    if ($query_sql_select_articles->num_rows > 0) {
                        while ($info_articles = $query_sql_select_articles->fetch_assoc()) {

                            ?>
                            <a href="article.php?article_id=<?php echo $info_articles["article_id"] ?>" cursor="pointer">
                                <article class="principal_articles" id="article">
                                    <h2>
                                        <?php echo $info_articles["article_name"]; ?>
                                    </h2>
                                    <h3>
                                        <?php echo $info_articles["article_date"]; ?>
                                    </h3>
                                    <p>
                                        <?php echo $info_articles["article_description"] ?>
                                    </p>
                                </article>
                            </a>

                            <hr class="articles_line_division">
                        <?php }
                    } ?>
                </section>

            </div>
            <div class="vertical_articles_line_division_config_blog" class="articles_section">

            </div>
            <aside id="main_blog_side">
                <section class="articles_section">
                    <article class="side_articles">
                        <h2>Recentes</h2>
                        <?php
                        $sql_select_recent_articles = "SELECT * FROM articles ORDER BY article_date LIMIT 2";
                        $query_result = $conection_db->query($sql_select_recent_articles);
                        if ($query_result->num_rows > 0) {
                            while ($info_recent_articles = $query_result->fetch_assoc()) { ?>

                                <h3>
                                    <?php echo $info_recent_articles["article_name"] ?>
                                </h3>
                                <p class="article_p">
                                    <?php echo $info_recent_articles["article_description"] ?>
                                </p>
                            </article>
                        <?php }
                        } ?>
                    </article>
                </section>
            </aside>
        </div>

    </main>
    <footer id="footer_blog_principal">
        <div>
            <p>2023 &#169; Todos os direitos reservados | Desenvolvido por <a href="index.php">Zek Nogueira</a></p>
        </div>

    </footer>

</body>

</html>