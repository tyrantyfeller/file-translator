$( document ).ready(function() {
    $.ajax({
        url: "paginas/ajax/encorpora.php",
        data: {acao: 'getEmpresas'},
        success: function( result ) {
            retorno = JSON.parse(result);
            if (retorno.erro) {
                alert('erro ao logar');
            }
            $("#lb_empresa").append(retorno.html);
        }
    });
    $('#btn-encorporar').click(function () {
        if ($('#lb_empresa').val() != '') {

        } else {

        }
    });
});