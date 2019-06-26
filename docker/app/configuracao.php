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
            <div class="container">
                <h5 class="card-title">Direção da Configuração</h5>
                <div class="form-row">
                    <div class="form-group col-md-6 select-empresa">
                        <label for="lb_direcao_empresa_origem">Empresa Origem</label>
                        <select id="lb_direcao_empresa_origem" class="form-control">
                            <option selected>Selecione...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 select-empresa">
                        <label for="lb_direcao_empresa_destino">Empresa Destino</label>
                        <select id="lb_direcao_empresa_destino" class="form-control">
                            <option selected>Selecione...</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <br />
            <div class="container">
                <h5 class="card-title">Configuração do Arquivo</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="origem-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Empresa Origem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="destino-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">Empresa Destino</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dados-nota-tab" data-toggle="tab" href="#contato" role="tab" aria-controls="contact" aria-selected="false">Dados Notas Fiscais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="produto-nota-tab" data-toggle="tab" href="#contato" role="tab" aria-controls="contact" aria-selected="false">Produtos Notas Fiscais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="observacao-tab" data-toggle="tab" href="#contato" role="tab" aria-controls="contact" aria-selected="false">Observação</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="origem-tab">
                        <br />
                        <div class="container">
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
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tamanho da informação</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tipo do dado</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Completar espaço em branco</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="destino-tab">
                        <br />
                        <div class="container">
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
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tamanho da informação</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tipo do dado</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Completar espaço em branco</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="dados-nota-tab">
                        <br />
                        <div class="container">
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
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tamanho da informação</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tipo do dado</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Completar espaço em branco</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="produto-nota-tab">
                        <br />
                        <div class="container">
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
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tamanho da informação</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tipo do dado</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Completar espaço em branco</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="observacao-tab">
                        <br />
                        <div class="container">
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
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tamanho da informação</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Tipo do dado</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lb_posicao_identificador_origem">Completar espaço em branco</label>
                                    <input type="text" class="form-control" id="lb_posicao_identificador_origem" name="lb_posicao_identificador_origem">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div>
        <script src="externo/assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="externo/assets/JQuery-3.4.1/jquery-3.4.1.min.js"></script>
        <script src="paginas/js/configuracao.js"></script>
        <script src="paginas/js/global.js"></script>
        <script src="externo/assets/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
    </body>
</html>