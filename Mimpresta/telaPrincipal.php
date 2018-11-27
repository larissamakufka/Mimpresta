<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title>Procurar produtos</title>
        <style>

            body  {
                background: url("./Img/planoFundo.png");
                background-size: cover;
                background-repeat:no-repeat;
            }
            #buscar {
                background-color: whitesmoke;
            }
            #tela2 {
                background-color: whitesmoke;
            }

            nav {
                background-color: rgba(0,0,0,0.2);
            }
        </style>
    </head>
    <body>
        <nav class="z-depth-0">
            <div class="container">
                <div class="row">
                    <div class="col s4 m4 l3">
                        <a class="brand-logo">Mimpresta</a>
                    </div>
                    <div class="col s8 m8 l9 offset-10">
                        <ul class="right">
                            <li class="active"><a href="telaPrincipal.php">Home</a></li>
                            <li><a href="telaCadastroProduto.php">Cadastrar produto</a></li>
                            <li><a href="meusProdutos.php">Meus produtos</a></li>
                            <li><a href="telaPerfil.php">Meu perfil</a></li>
                            <li><a href="index.php">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <br/>
        <!-- Conteúdo -->
        <div class="container">
            <div class="row">
                <div class="col s4 m4 l4 offset-4">
                    <!-- Forms -->
                    <div class="forms"> 

                        <!-- Search input-->
                        <div id="buscar">
                            <form class="form-horizontal" method="post" action="actions/alugar.php">
                                <fieldset>                        
                                    <span class="card-title">Busca de produtos</span>
                                    <br/> 
                                    <br/> 
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="paisProduto">País</label>
                                        <div class="col-md-6">
                                            <select id="tipoProduto" name="paisProduto" class="browser-default custom-select">
                                                <option selected>Selecione o país</option>
                                                <?php
                                                include ("servicos/conexaoBD.php");
                                                $consultaPais = mysqli_query(conectar(), "SELECT * FROM PAIS");
                                                while ($dados = mysqli_fetch_assoc($consultaPais)) {
                                                    ?>
                                                    <option value="<?= $dados['idPais']; ?>"> <?= $dados['nome_pais']; ?></option>           
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
                                                <option selected>Selecione o estado</option>
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
                                                <option selected>Selecione a cidade</option>
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
                                        </div>
                                    </div>

                                    <?php /* <div class="form-group">
                                      <label class="col-md-4 control-label" for="nomeProduto">Produto</label>
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

                                      <label>Alugar até: </label>
                                      <input name="dataFinalAluguel" type="date" class="form-control"> */ ?>

                                    <br/> 
                                    <!-- Button (Double) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="buttonSave"></label>
                                        <div class="col-md-8">
                                            <button type="submit" id="buttonSave" name="buttonSave" class="btn btn-primary">Aplicar</button>
                                            <button id="buttonClear" name="buttonClear" class="btn btn-default">Limpar</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>              
                    </div>
                </div>



                <div class="col s8 m8 l8 offset-8">
                    <form>
                        <div id="tela2">
                            <fieldset>
                                <table>
                                    <thead>
                                        <tr class="header">
                                            <th>
                                                Descrição
                                            </th>
                                            <th>
                                                Valor por dia
                                            </th>
                                            <th>
                                                Pretendo alugar até:
                                            </th>
                                            <th>
                                                Reservar
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //criei a action "alugar" e o serviço filtro, 
                                        //falta fazer funcionar a listagem de produtos conforme filtro.
                                        //após, falta fazer o botão reservar funcionar.

                                        $consultaNomeProduto = mysqli_query(conectar(), "SELECT * FROM produto");
                                        $linha = mysqli_fetch_array($consultaNomeProduto);
                                        while ($dados = mysqli_fetch_array($consultaNomeProduto)) {
                                            ?>
                                            <tr> 
                                                <td> 
                                                    <?= $linha['nome_produto'] ?> 
                                                </td> 
                                                <td> 
                                                    <?= $linha['valor_dia'] ?> 
                                                </td> 
                                                <td> 
                                                    <input name="dataFinalAluguel" type="date" class="form-control">
                                                </td> 
                                                <td> 
                                                    <a class="btn-floating btn-default waves-effect waves-light green"><i class="material-icons">+</i></a>
                                                </td> 
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
