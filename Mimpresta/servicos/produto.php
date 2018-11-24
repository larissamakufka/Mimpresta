<?php

require __DIR__ . '/conexaoBD.php';
session_start();


function addProduto($nome, $tipo, $valor) {
    
    $sql = "insert into produto values(0,1,$_SESSION[id_usuario],$tipo,'$nome',$valor)";
    $link = conectar();
    if (!mysqli_query($link, $sql)) {
        echo mysqli_error($link);
        exit;
    }

    // Inicialmente a data fica nula
  /*  $sql = "insert into fornecido values(0,$idProdutoVez,$_SESSION[id_usuario],'0000/00/00','0000/00/00')";
    $link = conectar();
    if (!mysqli_query($link, $sql)) {
        echo mysqli_error($link);
        exit;
    }
*/
    
}
