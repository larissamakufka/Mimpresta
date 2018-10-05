<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Cadastro de produto</title>

        <style>
            #login{
                width: 400px;
                margin: auto;
                margin-top: 50px;
            }

        </style>
    </head>
    <body background="https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg">

        <div id="login" class="card">
            <div class="card-body">
                <h6 class="card-title text-center" >CADASTRO DE PRODUTO</h6>
                <div class="form-group" >
                    <form method="post" action="actions/addUsuario.php">
                        <label>Nome Produto</label>
                        <input name="nome"class="form-control" placeholder="Nome do Produto"/>
                        <label>Tipo</label>
                        <input name="tipo"class="form-control" placeholder="Tipo do produto"/>
                        <label>Quantidade</label>
                        <input name="quantidade"class="form-control" placeholder="quantidade"/>
                        <br/>
                        <div class = text-center>
                            <button type="submit" class="btn btn-primary text-center">Confirmar Cadastro</button>
                            <br/><br/> 
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
