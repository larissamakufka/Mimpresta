<?php
require __DIR__ . '/conexaoBD.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function addUsuario($nome,$cpf,$rg,$email,$usuario,$senha){
    $sql = "insert into usuario values(0,'$nome','$cpf', '$rg',$email','$usuaio','$senha',)";
    $link = conectar();
    if(!mysqli_query($link, $sql)) {
        echo mysqli_error($link);
        exit;
    }
}
