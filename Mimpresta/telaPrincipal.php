<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Procurar produtos</title>

        <style>
            #tela {
                width: 1700px;
                margin: 0 auto;
                margin-top: 50px;
            }
            #buscar {
                margin-top: 50px;
                width: 450px;
                background-color: whitesmoke;
                border-radius: 20px;
            }
        </style>
    </head>
    <body background="https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg">
        <!-- Navegador das páginas-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Mimpresta</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="telaPrincipal.php">Home</a></li>
                    <li><a href="telaCadastroProduto.php">Cadastrar produto</a></li>
                    <li><a href="#">Meus produtos</a></li>
                    <li><a href="#">Meu perfil</a></li>
                </ul>
            </div>
        </nav>
        <!-- Search input-->
        <div id="tela">
            <!-- Search input-->
            <div id="buscar">
                <form class="form-horizontal">
                    <fieldset>
                        <br/>                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="localidadeProduto">Localidade</label>
                            <div class="col-md-6">
                                <select id="tipoProduto" name="localidadeProduto" class="form-control">
                                    <option selected>Selecione o tipo</option>
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
                                <p class="help-block">Localidade em que o produto se encontra</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="tipoProduto">Tipo</label>
                            <div class="col-md-6">
                                <select id="tipoProduto" name="tipoProduto" class="form-control">
                                    <option selected>Selecione o tipo</option>
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
                                <p class="help-block">Tipo do produto</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nomeProduto">Descrição</label>
                            <div class="col-md-6">
                                <select id="nomeProduto" name="nomeProduto" class="form-control">
                                    <option selected>Selecione o tipo</option>
                                    <?php
                                    $consultaNomeProduto = mysqli_query(conectar(), "SELECT * FROM produto");
                                    while ($dados = mysqli_fetch_assoc($consultaNomeProduto)) {
                                        ?>
                                        <option value="<?= $dados['idproduto']; ?>"> <?= $dados['nome_produto']; ?></option>           
                                        <?php
                                    }
                                    ?>
                                </select>
                                <p class="help-block">Nome do produto</p>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="buttonSave"></label>
                            <div class="col-md-8">
                                <button id="buttonSave" name="buttonSave" class="btn btn-primary">Aplicar</button>
                                <button id="buttonClear" name="buttonClear" class="btn btn-default">Limpar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>
