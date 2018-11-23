<?php
session_start();
if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"] == "") {
    header("location: index.php");
}
?>
<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="js/jQuery.js" type="text/javascript"></script>
        <script src="js/jquery.mask.min.js" type="text/javascript"></script>

        <title> Cadastro de produto </title>

        <style>
            body  {
                background: url("./trianglify.png");
                background-size: cover;
                background-repeat:no-repeat;
            }
            #login{
                margin: auto;
                margin-top: 20px;
            }
            nav {
                background-color: rgba(0,0,0,0.2);
            }

        </style>
    </head>
    <body >
        <nav class="z-depth-0">
            <div class="container">
                <a class="brand-logo">Mimpresta</a>
                <ul class="right">
                    <li><a href="telaPrincipal.php">Home</a></li>
                    <li class="active"><a href="telaCadastroProduto.php">Cadastrar produto</a></li>
                    <li><a href="#">Meus produtos</a></li>
                    <li><a href="#">Meu perfil</a></li>
                    <li><a href="index.php">Sair</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l8 offset-l2">
                    <div id="login" class="card">
                        <div class="card-content">
                            <span class="card-title">Cadastro de Produtos</span>
                            <div class="form-group">
                                <br/>
                                <form method="post" action="actions/addProduto.php">
                                    <label>Nome Produto</label>
                                    <input name="nomeProduto"class="form-control" placeholder="Nome do Produto" autofocus=""/>
                                    <br/>
                                    <br/>
                                    <div>
                                        <label>Categoria:</label>
                                        <select name="tipoProduto" class="browser-default custom-select">
                                            <option selected>Selecione a categoria</option>
                                            <?php
                                            include ("servicos/conexaoBD.php");
                                            $consultaTipos = mysqli_query(conectar(), "SELECT * FROM tipo_produto");
                                            while ($dados = mysqli_fetch_assoc($consultaTipos)) {
                                                ?>
                                                <option value="<?= $dados['idtipoproduto']; ?>"> <?= $dados['nome']; ?></option>           
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m12 l6">
                                            <label>Valor por dia de uso do produto</label>
                                            <input name="valor_dia" type="text" class="form-control money" placeholder="valor"  />
                                        </div>
                                        <div class="col s12 m12 l6">
                                            <label>Quantidade</label>
                                            <input name="quantidade" type="number" class="form-control" placeholder="quantidade"/>
                                        </div>
                                    </div>
                                    <div class = text-center>
                                        <button type="submit" class="btn btn-primary text-center">Confirmar Cadastro</button>
                                    </div>   
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <br><br>
    </body>
    <script>
        $(document).ready(function () {
            $('.money').mask('000.000,00', {reverse: true});
        });
    </script>
</html>
