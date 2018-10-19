<?php
require __DIR__ . '/conexaoBD.php';

function addProduto(){
    $sql = "insert into usuario values(0,'$idEstado','$idPais','$idCidade','$nome','$cpf','$rg','$email','$usuario','$senha','$logradouro','$complementoLogradouro')";
    $link = conectar();
    if(!mysqli_query($link, $sql)) {
        echo mysqli_error($link);
        exit;
    }
    
    
    
    
}

