<?php
require __DIR__ . '/../servicos/usuario.php';

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

validaLogin($usuario, $senha);
