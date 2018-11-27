<?php

require __DIR__ . '/../servicos/produto.php';

$nome = $_POST["nomeProduto"];
$tipo = $_POST["tipoProduto"];
$valor = $_POST["valor_dia"];
$pais = $_POST["paisProduto"];
$estado = $_POST["estadoProduto"];
$cidade = $_POST["cidadeProduto"];

addProduto($nome, $tipo,$valor, $pais, $estado, $cidade);

header("location: ../telaCadastroProduto.php");



