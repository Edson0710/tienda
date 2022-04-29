$(document).ready(function() {
    $('.store').on('click', function(e){
        e.preventDefault();
        var method = $(this).data('method');
        var action = $(this).data('action');
        var form = $(this).data('form');
        var apuntador = $(this).data('container');
        var modal = $(this).data('modal');
        console.log(method, action, form, apuntador);
        $.ajax({
            type: method,
            url: action,
            // data:$(form).serialize(),
            data: new FormData($(form)[0]),
            contentType: false,
            processData: false,
            cache: false,
            success: function(response){
                $(apuntador).empty();
                $(apuntador).html(response);
                // initComponents();
            },
            error: function(response){
                console.log('error');
            }
        });
    });


});
