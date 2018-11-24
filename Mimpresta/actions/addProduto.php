<?php

require __DIR__ . '/../servicos/produto.php';

$nome = $_POST["nomeProduto"];
$tipo = $_POST["tipoProduto"];
$valor = $_POST["valor_dia"];

addProduto($nome, $tipo,$valor);

header("location: ../telaCadastroProduto.php");



