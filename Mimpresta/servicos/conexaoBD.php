<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function conectar() {

    $link = mysqli_connect("localhost", "root", "", "mimpresta", 3306);
    mysqli_set_charset($link, "UTF-8");
    mysqli_query($link, "SET NAMES 'utf8'");
    mysqli_query($link, 'SET character_set_connection=utf8');
    mysqli_query($link, 'SET character_set_client=utf8');
    mysqli_query($link, 'SET character_set_results=utf8');
    if (!$link) {
        echo 'Não foi possível conectar!';
        exit();
    }
    return $link;
}
