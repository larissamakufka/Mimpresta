<?php
require __DIR__ . '/conexaoBD.php';
session_start();

function addAlugado($idProduto,$idUsuario,$dataInicio, $dataFim) {
    $sql = "insert into alugado values(0,$idUsuario,$idProduto,STR_TO_DATE('$dataInicio', '%Y-%m-%d'), STR_TO_DATE('$dataFim', '%Y-%m-%d'))";
    $link = conectar();
    if (!mysqli_query($link, $sql)) {
        echo mysqli_error($link);
        exit;
    }
}


