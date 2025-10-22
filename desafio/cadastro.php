<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="form">
        <h1>Faça seu cadastro!</h1>

        <form action="cad.php" method="POST">
            <label>Login:</label><br>
            <input type="text" id="login" name="login"><br><br>

            <label>Senha:</label><br>
            <input type="password" id="senha" name="senha"><br><br>

            <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn">
        </form>
    </div>

</body>

</html>