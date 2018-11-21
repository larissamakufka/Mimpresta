<?php
require __DIR__ . '/conexaoBD.php';

function addProduto($nome,$tipo,$usuario,$senha){
    $sql = "select idusuario from usuario where usuario = '$usuario' and senha = '$senha'";
    $link1 = conectar();
    $rs = mysqli_query($link1, $sql);
    $dados = mysqli_fetch_assoc($rs);
    $idUsuario = $dados["idusuario"];

    $sql = "insert into produto values(0,1,$idUsuario,$tipo,'$nome')";
    
    $link = conectar();
    if(!mysqli_query($link, $sql)){
        echo mysqli_error($link);
        exit;
    }
}


