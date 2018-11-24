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
        <!-- Conteúdo -->
        <div class="col s4 m4 l4 offset-4">
            <form>
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
                                        Reservado por alguem?
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include ("servicos/conexaoBD.php");
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
                                    </tr>
                                    <?php
                                } while ($dados = mysqli_fetch_array($consultaNomeProduto));
                                ?>
                            </tbody>
                        </table>
                    </fieldset>
                </div>
            </form>
        </div>
        <div class="col s8 m8 l8 offset-8">
            <form>
                <div id="tela2">
                    <fieldset>
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
                                    </tr>
                                    <?php
                                } while ($dados = mysqli_fetch_array($consultaNomeProduto));
                                ?>
                            </tbody>
                        </table>
                    </fieldset>
                </div>
            </form>
        </div>
    </body>
</html>

