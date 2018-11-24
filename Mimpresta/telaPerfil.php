<?php
session_start();
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"] == "") {
    header("location: index.php");
}

?>

<html>
    <head>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title> Cadastro de produto </title>

        <style>
            body  {
                background: url("./trianglify.png");
            }
            #login{
                width: 1000px;
                margin: auto;
                margin-top: 20px;
            }
            nav {
                background-color: rgba(0,0,0,0.2);
            }
            
        </style>
    
    </head>
    
    <body>
        <nav class="z-depth-0">
            <div class="container">
                <a class="brand-logo">Mimpresta</a>
                <ul class="right">
                    <li><a href="telaPrincipal.php">Home</a></li>
                    <li ><a href="telaCadastroProduto.php">Cadastrar produto</a></li>
                    <li><a href="meusProdutos.php">Meus produtos</a></li>
                    <li class="active"><a href="telaPerfil.php">Meu perfil</a></li>
                    <li><a href="index.php">Sair</a></li>
                </ul>
            </div>
        </nav>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>


