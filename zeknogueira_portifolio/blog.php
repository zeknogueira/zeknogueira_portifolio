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
    <title>Zek Nogueira</title>
</head>

<body class="white_body_blog">
    <header id="small_header">
        <div id="logo_blog">
            <h1>ZEK<span id="zek_logo_blog">/Blog</span></h1>
        </div>


        <div id="menu">

            <nav id="principal_nav">
                <a href="login.php">
                    <div class="buttom_login_box">
                        <button>Login</button>
                    </div>
                </a>
                <a href="blog.php">Blog</a>
                <a href="contato.html">Contato</a>
                <a href="Projetos">Projetos</a>
                <a href="curriculo.html">Curriculo</a>
            </nav>
        </div>

    </header>
    <main id="white_main_blog">
        <div id="title_articles_box">
            <h1 id="article_title_blog">Articles</h1>
        </div>
        <div id="main_blog_principal_box">
            <div id="main_blog_principal">
                <section class="articles_section">
                    <article class="principal_articles" id="article_1">
                        <h2>Article 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nemo aliquid velit
                            consequatur, autem dicta officia doloribus odio dolorem ratione fugit illum accusantium modi
                            unde, voluptas eaque qui magnam! Animi?Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Voluptatibus nobis labore hic mollitia praesentium porro officia, atque id accusamus
                            consequuntur blanditiis maiores placeat doloremque aliquam fuga expedita quisquam sed
                            similique!Loremlorem
                        </p>
                    </article>
                    <hr class="articles_line_division">
                    <article class="principal_articles" id="article_2">
                        <h2>Article 3</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates aliquam officia
                            explicabo illo non necessitatibus minus natus, magni vel fugit. Blanditiis eos mollitia, et
                            vel aliquam dolor itaque voluptate cupiditate!</p>
                    </article>

                </section>

            </div>
            <div class="vertical_articles_line_division_config_blog" class="articles_section">

            </div>
            <aside id="main_blog_side">
                <section class="articles_section">
                    <article class="side_articles" id="article_2">
                        <h3>Article 2</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates aliquam officia
                            explicabo
                            illo non necessitatibus minus natus, magni vel fugit. Blanditiis eos mollitia, et vel
                            aliquam
                            dolor itaque voluptate cupiditate!</p>
                    </article>
                    <article class="side_articles" id="article_2">
                        <h3>Article 4</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates aliquam officia
                            explicabo
                            illo non necessitatibus minus natus, magni vel fugit. Blanditiis eos mollitia, et vel
                            aliquam
                            dolor itaque voluptate cupiditate!</p>
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