<?php
//conexão com o banco de dados via include
include (conexao.php);

$nome = $_post['name']; 
$email = $_post['email'];
$senha = $_post['password'];
$mensagem = $_post['mensagem'];

$sql = "INSERT INTO usuarios(nome, nascimento, email, senha) VALUES ('$name', '$email', '$senha', '$mensagem')";

if(mysqli_query($conexao,$sql) 