<?php
require __DIR__ . '/../servicos/aluguel.php';

$paisProduto = $_POST["paisProduto"];
$estadoProduto = $_POST["estadoProduto"];
$cidadeProduto = $_POST["cidadeProduto"];
$tipo = $_POST["tipoProduto"];

filtro($paisProduto,$estadoProduto,$cidadeProduto,$tipo);
    
header("location: ../telaPrincipal.php");