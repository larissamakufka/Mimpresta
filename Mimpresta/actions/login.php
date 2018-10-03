<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "jordy"&& $senha=="123"){
    echo 'Entrou';
}else{
    header("location: ../index.php?status=1");
}

