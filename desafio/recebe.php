<?php
include("db.php"); 

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$endereco = $_POST['endereco'];
$celular = $_POST['celular'];
$email = $_POST['email'];

$sql = "INSERT INTO demo (nome, cpf, idade, endereco, celular, email) VALUES ('$nome', '$cpf', '$idade', '$endereco', '$celular', '$email')";

if ($conn->query($sql) === TRUE) {
    echo("Enviado com sucesso! ;)");
} else {
    echo ("Erro ao enviar :(") . $conn->error;
}
?>