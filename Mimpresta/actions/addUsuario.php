<?php
require __DIR__ . '/../servicos/usuario.php';

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$idEstado= $_POST["idEstado"];
$idPais = $_POST["idPais"];
$logradouro=$_POST["logradouro"];
$complementoLogradouro=$_POST["complementoLogradouro"];


addUsuario($idEstado,$idPais,$idCidade,$nome,$cpf,$rg,$email,$usuario,$senha,$logradouro,$complementoLogradouro);
    
header("location: ../index.php");

