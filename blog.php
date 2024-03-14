<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once "conection.php"
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Zek Nogueira</title>
</head>

<body class="white_body_blog">
    <header id="small_header">
        <div id="logo_blog">
            <a href="blog.php">
                <h1>ZEK<span id="zek_logo_blog">/Blog</span></h1>
            </a>
        </div>


        <div id="menu">

            <nav id="principal_nav">

                <a href="blog.php" class="nav_a_page_selected">Blog</a>
                <a href="index.php">Serviços</a>
                <a href="login.php"><button class="enter_button">Entrar</button></a>
            </nav>
        </div>

    </header>
    <main class="white_main_blog">
        <div class="space_between_header_articles">

        </div>
        <div class="main_blog_principal_box">
            <div class="main_blog_principal">
                <section class="articles_section">
                    <?php
                    require "conection.php";
                    if (isset($_GET['articles_categories'])) {
                        $article_category_sended = $_GET["articles_categories"];
                        ?>

                        <h1 class="article_category_tittle">
                            <?php echo $article_category_sended; ?>
                        </h1>
                        <?php


                        $sql_query = "select * from articles where article_category = ?";
                        $conection_prepare = $conection_db->prepare($sql_query);
                        $conection_prepare->bind_param("s", $article_category_sended);
                        $conection_prepare->execute();
                        $result = $conection_prepare->get_result();
                        if ($result->num_rows > 0) {
                            while ($article_content = $result->fetch_assoc()) {

                                ?>

                                <a href="article.php?article_id=<?php echo $iarticle_content["article_id"] ?>" cursor="pointer">
                                    <article class="principal_articles" id="article">
                                        <div class="principal_articles_tittle_date_box">
                                            <h2 class="principal_articles_tittle">
                                                <?php echo $article_content["article_name"]; ?>
                                            </h2>
                                            <p class="principal_articles_date">
                                                <?php echo $article_content["article_date"]; ?>
                                            </p>
                                        </div>
                                        <div class="principal_articles_description_box">
                                            <p class="principal_articles_description">
                                                <?php echo $article_content["article_description"] ?>
                                            </p>
                                        </div>
                                    </article>
                                </a>

                                <hr class="articles_line_division">
                                <?php
                            }

                        }
                        ;
                    } else {


                        $sql = "select * from articles";
                        $query_sql_select_articles = $conection_db->query($sql);
                        if ($query_sql_select_articles->num_rows > 0) {
                            while ($info_articles = $query_sql_select_articles->fetch_assoc()) {

                                ?>
                                <a href="article.php?article_id=<?php echo $info_articles["article_id"] ?>" cursor="pointer">
                                    <article class="principal_articles" id="article">
                                        <div class="principal_articles_tittle_date_box">
                                            <h2 class="principal_articles_tittle">
                                                <?php echo $info_articles["article_name"]; ?>
                                            </h2>
                                            <p class="principal_articles_date">
                                                <?php echo $info_articles["article_date"]; ?>
                                            </p>
                                        </div>
                                        <div class="principal_articles_description_box">
                                            <p class="principal_articles_description">
                                                <?php echo $info_articles["article_description"] ?>
                                            </p>
                                        </div>
                                    </article>
                                </a>

                                <hr class="articles_line_division">
                            <?php }
                        }
                        ;
                    } ?>
                </section>

            </div>
            <div class="vertical_articles_line_division_config_blog" class="articles_section">

            </div>
            <aside id="main_blog_side">
                <section class="side_articles_section">
                    <h2>MAIS RECENTES</h2>
                    <div class="side_articles_box_box">
                        <div class="side_articles_box">
                            <?php
                            $sql_select_recent_articles = "SELECT * FROM articles ORDER BY article_date LIMIT 2";
                            $query_result = $conection_db->query($sql_select_recent_articles);
                            if ($query_result->num_rows > 0) {
                                while ($info_recent_articles = $query_result->fetch_assoc()) { ?>
                                    <a href="article.php?article_id=<?php echo $info_recent_articles["article_id"] ?>"
                                        cursor="pointer">
                                        <article class="side_articles">
                                            <h3 class="side_articles_tittle">
                                                <?php echo $info_recent_articles["article_name"] ?>
                                            </h3>
                                            <p class="side_articles_description">
                                                <?php echo $info_recent_articles["article_description"] ?>
                                            </p>
                                        </article>
                                    </a>
                                    <hr class="articles_line_division">
                                    <div class="space_between_side_articles_horizontal_lines_and_tittle">

                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </section>
                <div class="space_between_side_box"></div>
                <section class="side_articles_section" class="side_articles_categories">
                    <h2>CATEGORIAS</h2>
                    <div class="side_articles_box_box">
                        <div class="side_articles_box">
                            <nav class="articles_categories_nav">
                                <div>
                                    <a href="blog.php?articles_categories=programacao">Programação</a>
                                    <hr class="articles_line_division">
                                </div>
                                <div>
                                    <a href="blog.php?articles_categories=musica">Música</a>

                                    <hr class="articles_line_division">
                                </div>
                                <div>
                                    <a href="blog.php?articles_categories=marketing">Marketing</a>
                                    <hr class="articles_line_division">
                                </div>
                            </nav>
                        </div>
                    </div>
                </section>
            </aside>
        </div>
        <div class="space_between_header_articles">

        </div>
    </main>
    <footer id="footer_blog_principal">
        <div>
            <p>2023 &#169; Todos os direitos reservados | Desenvolvido por <a href="index.php">Zek Nogueira</a></p>
        </div>

    </footer>

</body>

</html>