<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="externo/assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="paginas/css/encorpora.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <ul class="nav">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="encorpora.php">Encorporar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastro</a>
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
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <form id="formEncorpora">
                        <input id="lb-acao" type="hidden" name="acao" value="getEmpresas">
                        <h1 class="display-4">Encorporar empresa</h1>
                        <br />
                        <select class="form-control col-lg-12 col-sm-12" id="btn-encorporar-empresa">
                            <option>Selecione...</option>
                        </select>
                        <br />
                        <button type="button" class="btn btn-success col-lg-2 col-sm-2">Encorporar</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="externo/assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="externo/assets/JQuery-3.4.1/jquery-3.4.1.min.js"></script>
        <script src="paginas/js/encorpora.js"></script>
    </body>
</html>