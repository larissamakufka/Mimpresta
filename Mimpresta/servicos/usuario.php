<?php
require __DIR__ . '/conexaoBD.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function addUsuario($idEstado,$idPais,$idCidade,$nome,$cpf,$rg,$email,$usuario,$senha,$logradouro,$complementoLogradouro){
    $sql = "insert into usuario values(0,'$idEstado','$idPais','$idCidade','$nome','$cpf','$rg','$email','$usuario','$senha','$logradouro','$complementoLogradouro')";
    $link = conectar();
    if(!mysqli_query($link, $sql)) {
        echo mysqli_error($link);
        exit;
    }
    
    
    
    
}
