<?php
require __DIR__ . '/conexaoBD.php';
function addProduto($nome,$tipo,$usuario,$senha){
    $idUsuario = "select idusuario from usuario where usuario = '$usuario' and senha = '$senha'";
    $sql = "insert into produto values(0,1,$idUsuario,$tipo,'$nome')";
    
    $link1 = conectar();
    if(!mysqli_query($link1, $idUsuario)){
        echo mysqli_error($link1);
        exit;
    }
    $link = conectar();
    if(!mysqli_query($link, $sql)){
        echo mysqli_error($link);
        exit;
    }
}


