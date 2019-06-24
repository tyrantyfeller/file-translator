$( document ).ready(function() {
    $.ajax({
        url: "paginas/ajax/encorpora.php",
        data: {acao: 'getEmpresas'},
        success: function( result ) {
            retorno = JSON.parse(result);
            if (retorno.erro) {
                alert('erro ao logar');
            }
            if (retorno.empresaAssumida) {
                $('#select-empresa').hide();
            }
            $("#btn-empresa").append(retorno.html);
        }
    });
});