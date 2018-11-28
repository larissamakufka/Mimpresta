<?php

require __DIR__ . '/../servicos/aluguel.php';

$idProduto = $_POST["idproduto"];
$dataInicio = $_POST["dataInicioAluguel"];
$dataFim = $_POST["dataFinalAluguel"];
$idUsuario = $_SESSION["idusuario"];

addAlugado($idProduto,$idUsuario,$dataInicio, $dataFim);

header("location: ../telaPrincipal.php?status=1");