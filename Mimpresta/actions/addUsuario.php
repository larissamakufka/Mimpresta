<?php
require __DIR__ . '/../servicos/usuario.php';

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];


addUsuario($nome, $cpf, $rg, $email, $usuario, $senha);
    
header("location: ../index.php");

