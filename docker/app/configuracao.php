<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="externo/assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <ul class="nav">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="encorpora.php">Encorporar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="configuracao.php">Configuração</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listagem.php">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuario.php">Usuário</a>
                    </li>
                </ul>
            </ul>
            <button class="navbar-toggler" type="button">Sair</button>
        </nav>
        <br />
        <div class="container">
            <form>
                <h5 class="card-title">Empresa Origem</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lb_identificador_origem">Identificador</label>
                        <input type="text" class="form-control" id="lb_identificador_origem" name="lb_identificador_origem">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lb_posicao_identificador_origem">Posição Identificador</label>
                        <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                    </div>
                </div>
                <h5 class="card-title">Empresa Destino</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lb_identificador_emp">Identificador</label>
                        <input type="text" class="form-control" id="lb_identificador_emp" name="lb_identificador_emp">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lb_posicao_identificador_emp">Posição Identificador</label>
                        <input type="text" class="form-control" id="lb_posicao_identificador_emp" name="lb_posicao_identificador_emp">
                    </div>
                </div>
                <h5 class="card-title">Dados Notas Fiscais</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lb_identificador_nota">Identificador</label>
                        <input type="text" class="form-control" id="lb_identificador_nota" name="lb_identificador_nota">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lb_posicao_identificador_nota">Posição Identificador</label>
                        <input type="text" class="form-control" id="lb_posicao_identificador_nota" name="lb_posicao_identificador_nota">
                    </div>
                </div>
                <h5 class="card-title">Produtos Notas Fiscais</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lb_identificador_produto">Identificador</label>
                        <input type="text" class="form-control" id="lb_identificador_produto" name="lb_identificador_produto">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lb_posicao_identificador_produto">Posição Identificador</label>
                        <input type="text" class="form-control" id="lb_posicao_identificador_produto" name="lb_posicao_identificador_produto">
                    </div>
                </div>
                <h5 class="card-title">Observação</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lb_identificador_obs">Identificador</label>
                        <input type="text" class="form-control" id="lb_identificador_obs" name="lb_identificador_obs">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lb_posicao_identificador_obs">Posição Identificador</label>
                        <input type="text" class="form-control" id="lb_posicao_identificador_obs" name="lb_posicao_identificador_obs">
                    </div>
                </div>
                <button type="button" class="btn btn-success">Salvar</button>
            </form>
        </div>
        <script src="externo/assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="externo/assets/JQuery-3.4.1/jquery-3.4.1.min.js"></script>
        <script src="paginas/js/configuracao.js"></script>
        <script src="paginas/js/global.js"></script>
    </body>
</html>