<?
$connect = new mysqli("localhost", "usuario", "senha", "desafio");

if ($connect->connect_error) {
    die("Falha na conexão: " . $connect->connect_error);
}

$login = trim($_POST['login']);
$senha = trim($_POST['senha']);

if (empty($login) || empty($senha)) {
    echo "<script>
        alert('Os campos login e senha devem ser preenchidos!');
        window.location.href='cadastro.html';
    </script>";
    exit;
}

$stmt = $connect->prepare("SELECT login FROM usuarios WHERE login = ?");
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>
        alert('Esse login já existe!');
        window.location.href='cadastro.html';
    </script>";
    exit;
}

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $connect->prepare("INSERT INTO usuarios (login, senha) VALUES (?, ?)");
$stmt->bind_param("ss", $login, $senhaHash);

if ($stmt->execute()) {
    echo "<script>
        alert('Usuário cadastrado com sucesso!');
        window.location.href='login.html';
    </script>";
} else {
    echo "<script>
        alert('Não foi possível cadastrar o usuário.');
        window.location.href='cadastro.html';
    </script>";
}

$stmt->close();
$connect->close();
?>