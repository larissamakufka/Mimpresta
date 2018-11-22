<?php

require __DIR__ . '/conexaoBD.php';
session_start();

function addProduto($nome, $tipo) {

    $sql = "insert into produto values(0,1,$_SESSION[id_usuario],$tipo,'$nome')";

    $link = conectar();
    if (!mysqli_query($link, $sql)) {
        echo mysqli_error($link);
        exit;
    }
}
