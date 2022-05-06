$(document).ready(function() {
    $('.eliminar').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, bórralo!'
        }).then((result) => {
            if (result.value) {
                form.submit();
                // console.log('eliminar.js');
            }
        });
    });

    $('.cancelar').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Estás por cancelar este pedido!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, cancelar!'
        }).then((result) => {
            if (result.value) {
                form.submit();
                // console.log('eliminar.js');
            }
        });
    });

    $('.form-destroy').on('submit', function(e){
        e.preventDefault();
        var method = $(this).data('method');
        var action = $(this).attr('action');
        var form = $(this);
        var apuntador = $(this).data('to');
        // console.log(method, action, form, apuntador);
        $.ajax({
            type: method,
            url: action,
            data:$(form).serialize(),
            success: function(response){
                $(apuntador).empty();
                $(apuntador).html(response);
            },
            error: function(response){
                console.log('error');
            }
        });
    });

});
