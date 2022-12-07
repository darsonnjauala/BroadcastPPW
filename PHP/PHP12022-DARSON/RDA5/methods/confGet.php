<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
    <div class="login-box">
    <h2>Login</h2>
    <form method="get" action="fim.php">
        <div class="user-box">
            <input type="text" name="Nome" required="" value="<?= $_GET['Nome'] ?>">
            <label>Nome</label>
        </div>
        <div class="user-box">
            <input type="text" name="Apelido" value="<?= $_GET['Apelido'] ?>" required="">
            <label>Apelido</label>
        </div>
        <div class="user-box">
            <input type="text" name="Vaga" required="" value="<?= $_GET['Vaga'] ?>">
            <label>Vaga a que se candidata</label>
        </div>
        <div class="user-box">
            <input type="date" name="Data" value="<?= $_GET['Data'] ?>">
            <label>Data de Nascimento</label>
        </div>
        <div class="user-box">
            <input type="text" name="Nome" required="" value="<?= $_GET['Nivel'] ?>">
            <label>Nivel Academico</label>
        </div>

        <button type="submit">
        Submit
        </button>
    </form>
    </div>

</body>
</html>