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
    <main>
        <div class="principal_login_box">
            <section id="margin_login_box">
                <h1>Cadastre-se</h1>
                <form action="sign_up_process.php" method="POST">
                    <label for="user_name">User Name:</label>
                    <input type="text" name="user_name" id="user_name">
                    <label for="user_email">User Email:</label>
                    <input type="email" name="user_email" id="email">
                    <label for="password">Password:</label>
                    <input type="password" name="user_password" id="password">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_user_password" id="confirm_password">
                    <input type="submit" name="button_submit" id="button_submit_blog_login" value="Entrar">
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