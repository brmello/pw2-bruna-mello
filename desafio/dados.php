<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
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

            <label for="endereco">Endereço:</label><br>
            <input type="text" id="endereco" name="endereco" required><br><br>

            <label for="celular">Celular:</label><br>
            <input type="number" id="celular" name="celular" required maxlength="11" placeholder="11912345678"><br><br>

            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" required><br><br>

            <button type="submit" class="btn">Enviar</button>
        </form>
    </div>

</body>

</html>