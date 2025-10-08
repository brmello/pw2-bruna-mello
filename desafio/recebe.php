<?php
include("db.php"); 

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];

$sql = "INSERT INTO dados (nome, cpf, idade) VALUES ('$nome', '$cpf', '$idade')";

if ($conn->query($sql) === TRUE) {
    echo("Enviado com sucesso! ;)");
} else {
    echo ("Erro ao enviar :(") . $conn->error;
}
?>