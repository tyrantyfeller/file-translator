$( document ).ready(function() {
    $.ajax({
        url: "paginas/ajax/cadastro.php",
        data: {acao: 'getCadastroParametros'},
        success: function( result ) {
            retorno = JSON.parse(result);
        }
    });
});