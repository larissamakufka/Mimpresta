<?php
$status = -1;
if (isset($_GET["status"])) {
    $status = $_GET["status"];
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Mimpresta</title>

        <style>
            #login{
                width: 400px;
                margin: auto;
                margin-top: 150px;
            }
        </style>
    </head>
    <body background="https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">Mimpresta</a>
                </div>
            </div>
        </nav>
        <div id="login" class="card">
            <div class="card-body">
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
