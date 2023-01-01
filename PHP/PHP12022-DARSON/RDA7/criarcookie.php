<?php
    $cookie_nome = "user";
    $cookie_valor = "Carlos Chongo";
    setcookie($cookie_nome, $cookie_valor, time() + (86400 * 30), "/"); 
?>
<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_nome])) {
                echo "Cookie chamado '" . $cookie_nome . "' não tem valor!";
            } else {
                echo "Cookie '" . $cookie_nome . "' tem valor!<br>";
                echo "O valor é: " . $_COOKIE[$cookie_nome];
            }
        ?>
    </body>
</html>