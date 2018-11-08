<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Cadastro de usuário</title>

        <style>
            #login{
                width: 1000px;
                margin: 0 auto; 
                margin-top: 150px;
                background-color: whitesmoke;
                border-radius: 20px;
            }

        </style>
    </head>
    <body background="https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">Mimpresta - Cadastro de usuário</a>
                </div>
            </div>
        </nav>
        <div id="login" class="card">
            <div class="card-body">
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
                            <select name="pais" class="custom-select">
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
                            <select name="estado" class="custom-select">
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
                            <select name="cidade" class="custom-select">
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
