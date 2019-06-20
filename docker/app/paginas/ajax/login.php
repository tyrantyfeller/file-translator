<?php
require_once '../../externo/DAO/Usuario.php';

if (empty($_SESSION['ses_loginser'])) {
    //header('Location: /index.php');
    //exit;
}

$response = new stdClass();
$response->erro = false;
$response->status = '';
$response->msg = '';
$response->data = null;

function login() {
    global $response;
    $dao = new Usuario();

    $retorno = $dao->getLogin(
        array(
            'tx_usuario' => $_REQUEST['login'],
            'tx_senha' => $_REQUEST['senha']
        ),
        array('tx_usuario', 'tx_senha')
    );

    $response->data = current($retorno);

}

$funcs = array(
    'login'
);
if (in_array($_REQUEST['acao'], $funcs)) {
    call_user_func($_REQUEST['acao']);
    echo json_encode($response);
}
exit;