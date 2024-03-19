<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once "../config/conection.php";

    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
        <title>Zek Nogueira</title>
</head>

<body class="white_body_blog">
    <?php include "../elements/header_pattern.php"; ?>
    <main class="login_main">
        <div class="principal_login_box">
            <section id="margin_login_box">
                <div class="box_login">
                    <form action="process/login_process.php" method="POST" class="form_global_config">

                        <div>
                            <label for="user_email">Email:</label>
                            <input type="email" name="user_email" id="email">
                        </div>
                        <div>
                            <label for="user_password">Senha:</label>
                            <input type="password" name="user_password" id="password">
                        </div>
                        <div class="input_submit_div">
                            <input type="submit" name="button_submit"
                                class="pointer_buttons button_submit_blog_login_sign_up" value="Entrar">
                        </div>
                    </form>
                </div>
                <div id=box_hr_division_sign_up>
                    <hr id="hr_division_sign_up">
                </div>
                <div id="sign_up_section">
                    <h2 id="are_not_you_signed_question">Não é cadastrado?</h2>
                    <a href="sign_up.php"><button class="pointer_buttons"
                            id="sign_up_button_login_page">Cadastre-se</button></a>
                </div>

            </section>
        </div>

    </main>
    <footer id="footer_blog_principal">
        <div>
            <p>2023 &#169; Todos os direitos reservados | Desenvolvido por <a href="../../index.php">Zek Nogueira</a></p>
        </div>

    </footer>

</body>

</html>