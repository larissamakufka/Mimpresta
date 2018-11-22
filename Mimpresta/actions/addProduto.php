<?php

require __DIR__ . '/../servicos/produto.php';

$nome = $_POST["nomeProduto"];
$tipo = $_POST["tipoProduto"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

addProduto($nome, $tipo);

header("location: ../index.php");



