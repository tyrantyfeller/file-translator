<?php
session_start();

require_once '../../externo/DAO/Usuario.php';
require_once '../../externo/publicFunctions.php';

$response = new stdClass();
$response->erro = false;
$response->status = '';
$response->msg = '';
$response->data = null;

function cadastraUsuario() {
    
}

function excluirUsuario() {
	
}

$funcs = array(
    'cadastraUsuario', 'excluirUsuario'
);
if (in_array($_REQUEST['acao'], $funcs)) {
    call_user_func($_REQUEST['acao']);
    echo json_encode($response);
}
exit;