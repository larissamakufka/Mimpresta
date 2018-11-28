<?php
include ("servicos/conexaoBD.php");

$descricaoproduto = null;
if (isset($_GET["nomeProduto"])) {
    $descricaoproduto = $_GET["nomeProduto"];
}
$paisFiltro = null;
if (isset($_GET["paisProduto"])) {
    $paisFiltro = $_GET["paisProduto"];
}
$estadoFiltro = null;
if (isset($_GET["estadoProduto"])) {
    $estadoFiltro = $_GET["estadoProduto"];
}
$cidadeFiltro = null;
if (isset($_GET["cidadeProduto"])) {
    $cidadeFiltro = $_GET["cidadeProduto"];
}
$tipoProduto = null;
if (isset($_GET["tipoProduto"])) {
    $tipoProduto = $_GET["tipoProduto"];
}

$status = -1;
if (isset($_GET["status"])) {
    $status = $_GET["status"];
}

$sql = "SELECT * FROM produto WHERE 1 = 1";
if ($descricaoproduto != null) {
    $sql .= " AND nome_produto like '%$descricaoproduto%'";
}
if ($paisFiltro != null) {
    $sql .= " AND pais = $paisFiltro";
}
if ($estadoFiltro != null) {
    $sql .= " AND estado = $estadoFiltro";
}
if ($cidadeFiltro != null) {
    $sql .= " AND cidade = $cidadeFiltro";
}
if ($tipoProduto != null) {
    $sql .= " AND tipoProduto = $tipoProduto";
}

//echo($sql);
$consultaNomeProduto = mysqli_query(conectar(), $sql);
?>
<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="js/jQuery.js" type="text/javascript"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Procurar produtos</title>
        <meta charset="UTF-8">
        <style>

            body  {
                background: url("./Img/planoFundo.png");
                background-size: cover;
                background-repeat:no-repeat;
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
                        <div class="card">
                            <div class="card-content">
                                <form class="form-horizontal" method="GET" action="telaPrincipal.php">
                                    <span class="card-title">Busca de produtos</span>
                                    <br/> 
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="nomeProduto">Produto</label>
                                        <div class="col-md-6">
                                            <input id="nomeProduto" name="nomeProduto" class="browser-default custom-select"></input>
                                        </div>
                                    </div>
                                    <br/> 
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="paisProduto">País</label>
                                        <div class="col-md-6">
                                            <select id="paisProduto" name="paisProduto" class="browser-default custom-select">
                                                <option value="" selected>Selecione o país</option>
                                                <?php
                                                $consultaPais = mysqli_query(conectar(), "SELECT * FROM PAIS");
                                                while ($dados = mysqli_fetch_assoc($consultaPais)) {
                                                    ?>
                                                    <option value="<?= $dados['idpais']; ?>" <?= $paisFiltro == $dados['idpais'] ? 'selected' : '' ?>> <?= $dados['nome_pais']; ?></option>        
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br/> 
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="estadoProduto">Estado</label>
                                        <div class="col-md-6">
                                            <select id="estadoProduto" name="estadoProduto" class="browser-default custom-select">
                                                <option value="" selected>Selecione o estado</option>
                                                <?php
                                                $consultaEstado = mysqli_query(conectar(), "SELECT * FROM estado");
                                                while ($dados = mysqli_fetch_assoc($consultaEstado)) {
                                                    ?>    
                                                    <option value="<?= $dados['idestado']; ?>" <?= $estadoFiltro == $dados['idestado'] ? 'selected' : '' ?>> <?= $dados['nome_estado']; ?></option>          
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br/> 
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="cidadeProduto">Cidade</label>
                                        <div class="col-md-6">
                                            <select id="cidadeProduto" name="cidadeProduto" class="browser-default custom-select">
                                                <option value="" selected>Selecione a cidade</option>
                                                <?php
                                                $consultaCidade = mysqli_query(conectar(), "SELECT * FROM cidade");
                                                while ($dados = mysqli_fetch_assoc($consultaCidade)) {
                                                    ?> 
                                                    <option value="<?= $dados['idcidade']; ?>" <?= $cidadeFiltro == $dados['idcidade'] ? 'selected' : '' ?>> <?= $dados['nome_cidade']; ?></option>          
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br/> 
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tipoProduto">Tipo</label>
                                        <div class="col-md-6">
                                            <select id="tipoProduto" name="tipoProduto" class="browser-default custom-select">
                                                <option value="">Selecione o tipo</option>
                                                <?php
                                                $consultaTipos = mysqli_query(conectar(), "SELECT * FROM tipo_produto");
                                                while ($dados = mysqli_fetch_assoc($consultaTipos)) {
                                                    ?>
                                                    <option value="<?= $dados['idtipoproduto']; ?>" <?= $tipoProduto == $dados['idtipoproduto'] ? 'selected' : '' ?>> <?= $dados['nome']; ?></option>           
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br/> 
                                    <label>Alugar até: </label>
                                    <input name="dataFinalAluguel" type="date" class="form-control">
                                    <br/> 
                                    <br/> 
                                    <!-- Button (Double) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="buttonSave"></label>
                                        <div class="col-md-8">
                                            <button type="submit" id="buttonSave" class="btn btn-primary">Buscar</button>
                                            <button id="buttonClear" class="btn btn-default">Limpar filtro</button>
                                        </div>
                                    </div>
                                </form>
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="col s8 m8 l8 offset-8">
                    <div class="card">
                        <div class="card-content">

                            <table>
                                <thead>
                                    <tr class="header">
                                        <th>
                                            Descrição
                                        </th>
                                        <th>
                                            Valor
                                        </th>
                                        <th>
                                            Data início aluguel:
                                        </th>
                                        <th>
                                            Data fim aluguel:
                                        </th>
                                        <th>
                                            Alugar
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //criei a action "alugar" e o serviço filtro, 
                                    //falta fazer funcionar a listagem de produtos conforme filtro.
                                    //após, falta fazer o botão reservar funcionar.

                                    while ($dados = mysqli_fetch_array($consultaNomeProduto)) {
                                        ?>
                                    <form method="post" action="actions/alugar.php">
                                        <tr>         
                                            <td > 
                                                <input type="hidden" value="<?= $dados['idproduto'] ?>" name="idproduto" />
                                                <?= $dados['nome_produto'] ?> 
                                            </td> 
                                            <td id="valor"> 
                                                <?= $dados['valor_dia'] ?>
                                            </td> 
                                            <td id="dataInicio"> 
                                                <input name="dataInicioAluguel" type="date" class="form-control" required="">
                                            </td>
                                            <td id="dataFim"> 
                                                <input name="dataFinalAluguel" type="date" class="form-control" required="">
                                            </td> 
                                            <td> 
                                                <button class="btn-floating btn-default waves-effect waves-light green"><i class="material-icons">done</i></button>
                                            </td> 
                                        </tr>
                                    </form>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function () {
<?php if ($status != -1) { ?>
        M.toast({html: 'Produto alugado com sucesso'})
<?php } ?>
        });

    </script>
</html>
