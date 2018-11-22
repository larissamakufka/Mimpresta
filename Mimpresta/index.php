<?php
$status = -1;
if (isset($_GET["status"])) {
    $status = $_GET["status"];
}
?>
<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title> Login </title>
        <title>Mimpresta</title>

        <style>
            body{
                background: url("./trianglify.png");
            }

            #login{
                width: 400px;
                margin: auto;
                margin-top: 100px;
            }
            nav {
                background-color: rgba(0,0,0,0.2);
            }
        </style>
    </head>
    <body>
        <nav class="z-depth-0">
            <div class="container">
                <a class="brand-logo">MIMPRESTA</a>

            </div>
        </nav>
        <div id="login" class="card">
            <div class="card-content">
                <div class="form-group">
                    <form method="post" action="actions/login.php">
                        <label>Usuario:</label>
                        <input name="usuario"class="form-control" placeholder="usuário"/>
                        <label >Senha:</label>
                        <input name="senha" type="password"class="form-control" placeholder="senha" />
                        <br/>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary text-center">Login</button>
                            <br/> <br/> 

                            <label>Ainda não sou cadastrado:</label><br/>
                            <a class="btn btn-primary" href="telaCadastroUsuarios.php">Cadastrar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
