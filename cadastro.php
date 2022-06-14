<?php
//conexão com o banco de dados via include
include (conexao.php);

$nome = $_post['name']; 
$nascimento = $_post['date'];
$email = $_post['email'];
$senha = $_post['password'];

$sql = "INSERT INTO usuarios(nome, nascimento, email, senha) VALUES ('$name, '$nascimento', '$email', '$senha')";

if(mysqli_query($conexao,$sql) 