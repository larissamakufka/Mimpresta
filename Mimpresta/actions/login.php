<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "jordy"&& $senha=="123"){
    header("Location: telaCadastro.php");
}else{
    header("location: ../index.php?status=1");
}

