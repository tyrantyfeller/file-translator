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
                        <a class="nav-link active" href="cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="configuracao.php">Configuração</a>
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
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lb_nome_empresa">Nome Empresa</label>
                        <input type="text" class="form-control" id="lb_nome_empresa" name="lb_nome_empresa">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lb_nome_fantasia">Nome Fantasia</label>
                        <input type="text" class="form-control" id="lb_nome_fantasia" name="lb_nome_fantasia">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lb_cnpj">CNPJ</label>
                        <input type="text" class="form-control" id="lb_cnpj" name="lb_cnpj">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lb_ie">Inscrição estadual</label>
                        <input type="text" class="form-control" id="lb_ie" name="lb_ie">
                    </div>
                </div>
                <button type="button" class="btn btn-success">Cadastrar</button>
                <button type="button" class="btn btn-primary">Pesquisar</button>
            </form>
        </div>
        <script src="externo/assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="externo/assets/JQuery-3.4.1/jquery-3.4.1.min.js"></script>
        <script src="paginas/js/cadastro.js"></script>
        <script src="paginas/js/global.js"></script>
    </body>
</html>