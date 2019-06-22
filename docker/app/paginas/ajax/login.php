<?php
session_start();

require_once '../../externo/DAO/Usuario.php';
require_once '../../externo/publicFunctions.php';

$response = new stdClass();
$response->erro = false;
$response->status = '';
$response->msg = '';
$response->data = null;

function setSessionUser($dados) {
    $_SESSION['id_user'] = $dados->id_usuario;
    $_SESSION['nm_user'] = $dados->nm_usuario;
    $_SESSION['tp_user'] = $dados->tp_usuario;
    $_SESSION['id_empresa_user'] = $dados->id_empresa;
}
function login() {
    global $response;
    try {
        
        $dao = new Usuario();

        $retorno = $dao->getLogin(
            getWhereByArray(
                array(
                    'tx_usuario' => $_REQUEST['login'],
                    'tx_senha' => $_REQUEST['senha']
                )
            ),
            array(
                'tx_usuario', 'tx_senha', 'id_empresa',
                'id_usuario', 'nm_usuario', 'tp_usuario'
            )
        );

        $usuarioValido = false;
        if ($retorno) {
            $usuarioValido = true;
        }

        if (is_array($retorno)) {
            $retorno = current($retorno);
        }

        setSessionUser($retorno);

        if (!empty($retorno->id_empresa) && $retorno->id_empresa == 1) {
            header('Location: /encorpora.php');
            exit;
        } elseif (!empty($retorno->id_empresa) && $retorno->id_empresa != 1) {
            header('Location: /listagem.php');
            exit;
        }

        $response->data = $retorno;
    } catch (Exception $ex) {
        $response->msg = $ex->getMessage();
        $response->erro = true;
    }
}

$funcs = array(
    'login'
);
if (in_array($_REQUEST['acao'], $funcs)) {
    call_user_func($_REQUEST['acao']);
    echo json_encode($response);
}
exit;