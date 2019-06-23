$( document ).ready(function() {
    $('#btn-login').on('click', function() {
        $('.alert').hide();
        $.ajax({
            url: "paginas/ajax/login.php",
            data: $('#formLogin').serialize(),
            success: function( result ) {
                retorno = JSON.parse(result);
                if (!retorno.data) {
                    $('.alert').show().text('Login incorreto!');
                    return;
                }
                $(location).attr('href', retorno.href);
            }
        });
    });
});