<?php
include ("servicos/conexaoBD.php");

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
                background: url("./Img/planoFundo.png");
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
                    <li><a href="meusProdutos.php">Meus produtos</a></li>
                    <li><a href="telaPerfil.php">Meu perfil</a></li>
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
                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paisProduto">País</label>
                                                <div class="col-md-6">
                                                    <select id="tipoProduto" name="paisProduto" class="browser-default custom-select">
                                                        <option value="" selected>Selecione o país</option>
                                                        <?php
                                                        $consultaPais = mysqli_query(conectar(), "SELECT * FROM PAIS");
                                                        while ($dados = mysqli_fetch_assoc($consultaPais)) {
                                                            ?>
                                                            <option value="<?= $dados['idpais']; ?>"> <?= $dados['nome_pais']; ?></option>           
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="estadoProduto">Estado</label>
                                                <div class="col-md-6">
                                                    <select id="tipoProduto" name="estadoProduto" class="browser-default custom-select">
                                                        <option value="" selected>Selecione o estado</option>
                                                        <?php
                                                        $consultaEstado = mysqli_query(conectar(), "SELECT * FROM estado");
                                                        while ($dados = mysqli_fetch_assoc($consultaEstado)) {
                                                            ?>
                                                            <option value="<?= $dados['idestado']; ?>"> <?= $dados['nome_estado']; ?></option>           
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="cidadeProduto">Cidade</label>
                                                <div class="col-md-6">
                                                    <select id="tipoProduto" name="cidadeProduto" class="browser-default custom-select">
                                                        <option value="" selected>Selecione a cidade</option>
                                                        <?php
                                                        $consultaCidade = mysqli_query(conectar(), "SELECT * FROM cidade");
                                                        while ($dados = mysqli_fetch_assoc($consultaCidade)) {
                                                            ?>
                                                            <option value="<?= $dados['idcidade']; ?>"> <?= $dados['nome_cidade']; ?></option>           
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br/>
                                            <label>Categoria:</label>
                                            <select name="tipoProduto" class="browser-default custom-select">
                                                <option selected>Selecione a categoria</option>
                                                <?php
                                                $consultaTipos = mysqli_query(conectar(), "SELECT * FROM tipo_produto");
                                                while ($dados = mysqli_fetch_assoc($consultaTipos)) {
                                                    ?>
                                                    <option value="<?= $dados['idtipoproduto']; ?>"> <?= $dados['nome']; ?></option>           
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <br>
                                            <div class="row">
                                                <div class="col s6 m6 l6">
                                                    <label>Valor por dia de uso do produto</label>
                                                    <input name="valor_dia" type="text" class="form-control money" placeholder="valor"  />
                                                </div>
                                                <div class="col s6 m6 l6">
                                                    <label>Quantidade</label>
                                                    <input name="quantidade" type="number" class="form-control" placeholder="quantidade"/>
                                                </div>
                                            </div>   
                                            <div class = text-center>
                                                <button type="submit" class="btn btn-primary text-center">Confirmar Cadastro</button>
                                            </div>   
                                        </div>
                                    </div>
                                </form>
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
