<?php
require_once '../../externo/DAO/Empresa.php';
require_once '../../externo/publicFunctions.php';

$response = new stdClass();
$response->erro = false;
$response->status = '';
$response->msg = '';
$response->data = null;

function getOptionsEmpresas($empresas = array()) {
    $html = '';
    if ($empresas) {
        foreach ($empresas as $value) {
            $html .= "<option value={$value->id_empresa}>{$value->nm_empresa}</option>";
        }
    } else {
        throw new Exception('Nenhum dado encontrado.');
    }
    return $html;
}

function getEmpresas() {
    global $response;
    try {
        $dao = new Empresa();
        
        $retorno = $dao->getEmpresas("id_empresa != 1", array('id_empresa', 'nm_empresa'));
        $response->html = getOptionsEmpresas($retorno);
    } catch (Exception $ex) {
        $response->msg = $ex->getMessage();
        $response->erro = true;
    }
}

$funcs = array(
    'getEmpresas'
);
if (in_array($_REQUEST['acao'], $funcs)) {
    call_user_func($_REQUEST['acao']);
    echo json_encode($response);
}
exit;