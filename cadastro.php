<?php
//conexão com o banco de dados via include
include (conexao.php);

$nome = $_post['name']; 
$email = $_post['email'];
$senha = $_post['password'];
$mensagem = $_post['message'];

$sql = "INSERT INTO usuarios(nome, email, senha, mensagem) VALUES ('$name', '$email', '$senha', '$message')";

if(mysqli_query($conexao,$sql) 
echo ' Cadastro realizado com sucesso';
} else{
    echo 'Problemaas na hora de inserir';
}

mysqli_close($conexao);

?>