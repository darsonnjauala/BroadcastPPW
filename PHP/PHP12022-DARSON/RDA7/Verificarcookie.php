<?php
    setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>
    <?php
        if(count($_COOKIE) > 0) {
            echo "Cookies estão ativos.";
        } else {
            echo "Cookies estão inativos.";
        }
    ?>
</body>
</html>