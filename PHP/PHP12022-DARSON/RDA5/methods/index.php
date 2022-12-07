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
        <h2>Passagem de paramentro entre as paginas</h2>
        <form method="get" action="confGet.php">
            <div class="user-box">
                <input type="text" name="Nome" required="">
                <label>Nome</label>
            </div>
            <div class="user-box">
                <input type="text" name="Apelido" required="">
                <label>Apelido</label>
            </div>
            <div class="user-box">
                <input type="text" name="Vaga" required="">
                <label>Vaga a que se candidata</label>
            </div>
            <div class="user-box">
                <input type="date" name="Data">
            </div>
            <div class="input-group">
                <select name="Nivel" id="">

                    <option value="Basico">Basico</option>
                    <option value="Medio">Medio</option>
                    <option value="Tecnico Proficional">Tecnico Profissional</option>
                    <option value="Superior">Superior</option>
                </select>
            </div>

            <input type="submit" value="submeter">
        </form>
    </div>

</body>
</html>