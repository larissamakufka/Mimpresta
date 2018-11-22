<?php

require __DIR__ . '/../servicos/usuario.php';
session_start();

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$login = validaLogin($usuario, $senha);

$sql = "select idusuario from usuario where usuario = '$usuario' and senha = '$senha'";
$link1 = conectar();
$rs = mysqli_query($link1, $sql);
$dados = mysqli_fetch_assoc($rs);
$idUsuario = $dados["idusuario"];

if ($login) {
    $_SESSION["id_usuario"] = $idUsuario;
    $_SESSION["usuario"] = $usuario;
    header("location: ../telaPrincipal.php");
} else {
    header("location: ../index.php");
}
