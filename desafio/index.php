<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>

<body>
    <div class="form">
        <h1>Faça seu cadastro!</h1>

        <form action="recebe.php" method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="cpf">CPF:</label><br>
            <input type="text" id="cpf" name="cpf" required maxlength="11" placeholder="000.000.000-00"><br><br>

            <label for="idade">Idade:</label><br>
            <input type="number" id="idade" name="idade" required><br><br>

            <button type="submit" class="btn">Enviar</button>
        </form>
    </div>

</body>

</html>