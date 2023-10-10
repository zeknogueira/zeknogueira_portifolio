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
    <main class="login_main">
        <div class="principal_login_box">
            <section id="margin_login_box">
                <form action="login_process.php" method="POST" class="form_global_config">
                    <label for="user_email">User Email:</label>
                    <input type="email" name="user_email" id="email">
                    <label for="password">Password:</label>
                    <input type="password" name="user_password" id="password">
                    <input type="submit" name="button_submit" id="button_submit_blog_login" value="Entrar">
                </form>
                <h2>Não é cadastrado? <a href="sign_up.php">Cadastre-se</a></h2>
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