<?php
require __DIR__ . '/../servicos/usuario.php';
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

addUsuario($nome, $email, $senha);
    
header("location: ../index.php");

