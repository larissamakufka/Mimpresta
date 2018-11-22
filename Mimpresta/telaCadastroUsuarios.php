<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title>Cadastro de usuário</title>

        <style>
            
            body {
                background: url("./trianglify.png");
            }
            #login{
                width: 1000px;
                margin: 0 auto; 
                margin-top: 40px;
                background-color: whitesmoke;
                padding: 15px;   
            }
            nav {
                background-color: rgba(0,0,0,0.2);
            }

        </style>
    </head>
    <body >
        <nav class="z-depth-0">
            <div class="container">
                    <a class="brand-logo">Mimpresta - Cadastro de usuário</a> 
                
            </div>
        </nav>
        <div id="login" class="card">
            <div class="card-content">
                <div class="form-group" >
                    <form method="post" action="actions/addUsuario.php">
                        <label>Nome Completo</label>
                        <input name="nome"class="form-control" placeholder="usuário"/>
                        <label >Cpf</label>
                        <input name="cpf" class="form-control" placeholder="Cpf" />
                        <label >Rg</label>
                        <input name="rg" class="form-control" placeholder="Rg" />
                        <label>E-mail particular</label>
                        <input name="email"class="form-control" placeholder="E-mail"/>
                        <label>Rua onde mora</label>
                        <input name="nomeLogradouro"class="form-control" placeholder="Rua"/>
                        <label>Numero endereço</label>
                        <input name="numeroLogradouro"class="form-control" placeholder="Numero"/>
                        <label>Complemento endereço</label>
                        <input name="complementoLogradouro"class="form-control" placeholder="Complemento"/>                        
                        <div>
                            <label>Selecione o país:</label>
                            <select name="pais" class="browser-default custom-select">
                                <option selected>Selecione o País</option>
                                <?php
                                include ("servicos/conexaoBD.php");
                                $consultaPais = mysqli_query(conectar(), "SELECT * FROM pais");
                                while ($dados = mysqli_fetch_assoc($consultaPais)) {
                                    ?>
                                    <option value="<?= $dados['idpais']; ?>"> <?= $dados['nome_pais']; ?></option>           
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label>Selecione o estado:</label>
                            <select name="estado" class="browser-default custom-select">
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
                        <div>
                            <label>Selecione a cidade:</label>
                            <select name="cidade" class="browser-default custom-select">
                                <option selected>Selecione a cidade</option>
                                <?php
                                $consultaCidades = mysqli_query(conectar(), "SELECT * FROM cidade");
                                while ($dados = mysqli_fetch_assoc($consultaCidades)) {
                                    ?>
                                    <option value="<?= $dados['idcidade']; ?>"> <?= $dados['nome_cidade']; ?></option>           
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <label >Usuário</label>
                        <input name="usuario" class="form-control" placeholder="Usuario" />
                        <label >Senha</label>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" />
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
