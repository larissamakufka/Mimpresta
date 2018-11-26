
<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title>Meus Produtos</title>

        <style>

            body  {
                background: url("./trianglify.png");
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
    <body >
        <nav class="z-depth-0">
            <div class="container">
                <div class="row">
                    <div class="col s4 m4 l3">
                        <a class="brand-logo">Mimpresta</a>
                    </div>
                    <div class="col s8 m8 l9 offset-10">
                        <ul class="right">
                            <li><a href="telaPrincipal.php">Home</a></li>
                            <li><a href="telaCadastroProduto.php">Cadastrar produto</a></li>
                            <li class="active"><a href="meusProdutos.php">Meus produtos</a></li>
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
                <div class="col s12 m12 l12 offset-12">
                    <div id="tela2">
                        <fieldset>
                            <table>
                                <thead>
                                    <tr class="header">
                                        <th>
                                            Meus Produtos Fornecidos
                                        </th>
                                        <th>
                                            Valor por dia
                                        </th>
                                        <th>
                                            Status atual
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    session_start();
                                    include ("servicos/conexaoBD.php");
                                    $consultaFornecido = mysqli_query(conectar(), "SELECT * FROM fornecido f,produto p, "
                                            . "status_produto s "
                                            . "WHERE f.produto_idproduto = p.idproduto and "
                                            . "p.status_produto_idstatusproduto = s.idstatusproduto");

                                    $linha = mysqli_fetch_assoc($consultaFornecido);

                                    while ($linha = mysqli_fetch_assoc($consultaFornecido)) {
                                        ?>
                                        <tr> 
                                            <td> 
                                                <?= $linha['nome_produto'] ?> 
                                            </td> 
                                            <td> 
                                                <?= $linha['valor_dia'] ?> 
                                            </td> 
                                            <td> 
                                                <?= $linha['status_produto'] ?> 
                                            </td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l12 offset-12">
                    <div id="tela2">
                        <fieldset> <?php // Ainda falta implementar os produtos locados:       ?>
                            <table>
                                <thead>
                                    <tr class="header">
                                        <th>
                                            Meus produtos locados
                                        </th>
                                        <th>
                                            Valor por dia
                                        </th>
                                        <th>
                                            Prazo final para  devolução
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $consultaNomeProduto = mysqli_query(conectar(), "SELECT * FROM produto");
                                    $linha = mysqli_fetch_array($consultaNomeProduto);
                                    do {
                                        ?>
                                        <tr> 
                                            <td> 
                                                <?= $linha['nome_produto'] ?> 
                                            </td> 
                                            <td> 
                                                <?= $linha['valor_dia'] ?> 
                                            </td> 
                                            <td> 

                                            </td> 
                                        </tr>
                                        <?php
                                    } while ($dados = mysqli_fetch_array($consultaNomeProduto));
                                    ?>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


