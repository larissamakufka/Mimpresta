<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title>Meus Produtos</title>
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
                    <div class="card">
                        <div class="card-content">
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
                                    include ("servicos/conexaoBD.php");
                                    $consultaFornecido = mysqli_query(conectar(), "select * from produto p 
                                        inner join status_produto s on p.statusproduto = s.idstatusproduto 
                                        where p.usuario = $_SESSION[idusuario]");



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
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l12 offset-12">
                    <div class="card">
                        <div class="card-content">
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
                                        <th>
                                            Fornecedor
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $consultaAlugado = mysqli_query(conectar(), "SELECT * FROM alugado l,produto p, usuario u "
                                            . "WhERE l.produto_idproduto = p.idproduto and p.usuario = u.idusuario and l.usuario_idusuario = $_SESSION[idusuario]");

                                    while ($linha = mysqli_fetch_assoc($consultaAlugado)) {
                                        ?>
                                        <tr> 
                                            <td> 
                                                <?= $linha['nome_produto'] ?> 
                                            </td> 
                                            <td> 
                                                <?= $linha['valor_dia'] ?> 
                                            </td> 
                                            <td> 
                                                <?= $linha['data_fim_alugado'] ?>
                                            </td> 
                                            <td> 
                                                <?= $linha['nome_usuario'] ?>
                                            </td> 
                                        </tr>
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
</html>


