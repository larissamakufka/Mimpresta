<?php
require __DIR__ . '/../servicos/usuario.php';

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
header("location: ../telaCadastroProduto.php");
//validaLogin($usuario, $senha);
