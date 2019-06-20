$('#btn-login').on('click', function() {
    $.ajax({
        url: "paginas/ajax/login.php",
        data: $('#formLogin').serialize(),
        success: function( result ) {
            retorno = JSON.parse(result);
        }
    });
});