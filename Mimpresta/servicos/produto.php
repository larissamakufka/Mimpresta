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

    $sql = "SELECT idproduto from produto
           where usuario = $_SESSION[id_usuario] and tipoproduto = '$tipo' 
           and nome_produto ='$nome' and valor_dia = '$valor'";

    $link = conectar();
    $rs = mysqli_query($link, $sql);
    $dados = mysqli_fetch_assoc($rs);
    $idproduto = $dados["idproduto"];
    $_SESSION["idproduto"] = $idproduto;

    $sql = "insert into fornecido(idaluguelfornecedor, produto, usuario, data_inicio_fornecido, data_fim_fornecido) "
            . "values(0,$_SESSION[idproduto],$_SESSION[id_usuario],'0000/00/00','0000/00/00')";
    
    $link = conectar();
    if (!mysqli_query($link, $sql)) {
        echo mysqli_error($link);
        exit;
    }
}
