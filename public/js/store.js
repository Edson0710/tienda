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
            data:$(form).serialize(),
            success: function(response){
                $(apuntador).empty();
                $(apuntador).load(response);
            },
            error: function(response){
                console.log(response);
            }
        });
    });
});
