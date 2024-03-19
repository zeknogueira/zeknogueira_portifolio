<?php 
if ( session_status() !== PHP_SESSION_ACTIVE )
{
   session_start();
};
?>
<header id="small_header">

    <div id="logo_blog">
        <a href="blog.php">
            <h1>ZEK<span id="zek_logo_blog">/Blog</span></h1>
        </a>
    </div>


    <div id="menu">
        <nav id="principal_nav">

            <a href="../user/blog.php" class="nav_a_page_selected">Blog</a>
            <a href="../../index.php">Serviços</a>
            <?php if (isset ($_SESSION["user_name"])) {
                ?><a href="../login_logout_sign_up/login.php"><button class="enter_button">
                        <?php echo ucfirst(strtok($_SESSION["user_name"], " ")); ?>
                    </button></a>
                <a href="../login_logout_sign_up/process/logout_process.php"><button class="enter_button">
                        Logout
                    </button></a>
                <?php


            } else { ?>
                <a href="../login_logout_sign_up/login.php"><button class="enter_button">Entrar</button></a>
                <?php
            }
            ?>

        </nav>
    </div>
</header>
<?php

?>