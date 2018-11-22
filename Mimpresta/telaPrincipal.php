<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title>Procurar produtos</title>

        <style>

            body  {
                background: url("./trianglify.png");
            }
            #tela {
                width: 1700px;
                margin: 0 auto;
                margin-top: 50px;
            }
            #buscar {
                margin-top: 50px;
                width: 450px;
                background-color: whitesmoke;


            }
            #tela2 {
                width: 1700px;


            }

            nav {
                background-color: rgba(0,0,0,0.2);
            }
        </style>
    </head>
    <body >
        <!-- Navegador das páginas-->
        <nav class="z-depth-0">
            <div class="container">

                <a class="brand-logo">Mimpresta</a>

                <ul class="right">
                    <li class="active"><a href="telaPrincipal.php">Home</a></li>
                    <li><a href="telaCadastroProduto.php">Cadastrar produto</a></li>
                    <li><a href="#">Meus produtos</a></li>
                    <li><a href="#">Meu perfil</a></li>
                    <li><a href="index.php">Sair</a></li>
                </ul>
            </div>
        </nav>
        <!-- Search input-->
        <div id="tela">
            <!-- Search input-->
            <div id="buscar">
                <form class="form-horizontal">
                    <fieldset>                        
                        <span class="card-title">Busca de produtos</span>
                        <br/> 
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="localidadeProduto">Localidade</label>
                            <div class="col-md-6">
                                <select id="tipoProduto" name="localidadeProduto" class="browser-default custom-select">
                                    <option selected>Selecione a localidade</option>
                                    <?php
                                    include ("servicos/conexaoBD.php");
                                    $consultaTipos = mysqli_query(conectar(), "SELECT * FROM cidade");
                                    while ($dados = mysqli_fetch_assoc($consultaTipos)) {
                                        ?>
                                        <option value="<?= $dados['idcidade']; ?>"> <?= $dados['nome_cidade']; ?></option>           
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
                                <select id="tipoProduto" name="tipoProduto" class="browser-default custom-select">
                                    <option selected>Selecione o tipo</option>
                                    <?php
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
                                <select id="nomeProduto" name="nomeProduto" class="browser-default custom-select">
                                    <option selected>Selecione o produto</option>
                                    <?php
                                    $consultaNomeProduto = mysqli_query(conectar(), "SELECT * FROM produto");
                                    while ($dados = mysqli_fetch_assoc($consultaNomeProduto)) {
                                        ?>
                                        <option value="<?= $dados['idproduto']; ?>"> <?= $dados['nome_produto']; ?></option>           
                                        <?php
                                    }
                                    ?>
                                </select>

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
                    <fieldset>
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome Produto</th>                         
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nmProduto = mysqli_query(conectar(), "SELECT * FROM produto");
                                while ($dados = mysqli_fetch_assoc($nmProduto)){
                                    ?>
                                    <tr>                                       
                                        <td><?php $dados['nome_produto']; ?></td>
                                        
                                    </tr>

                                    <?php
                                }
                                ?> 
                            </tbody>
                        </table>
                    </fieldset>


                </form>
            </div>
        </div>
    </body>
</html>
