<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function conectar(){
    $link = mysqli_connect("localhost", "root", "", "mimpresta", 3306);
    if(!$link){
        echo 'Não foi possível conectar!';
        exit();
    }
    return $link;
}