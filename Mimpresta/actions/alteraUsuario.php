<?php
require __DIR__ . '/../servicos/usuario.php';
session_start();

$idUsuario=$_SESSION["idusuario"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$idEstado= $_POST["estado"];
$idPais = $_POST["pais"];
$idCidade = $_POST["cidade"];
$logradouro=$_POST["nomeLogradouro"];
$complementoLogradouro=$_POST["complementoLogradouro"];

AlteraUsuario($idUsuario, $idEstado,$idPais,$idCidade,$nome,$cpf,$rg,$email,$usuario,$senha,$logradouro,$complementoLogradouro);
    
header("location: ../telaPerfil.php");

