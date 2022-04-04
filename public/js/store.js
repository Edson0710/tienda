const { method } = require('lodash');

$(document).ready(function() {
    $('.store').on('click', function(e){
        e.preventDefault();
        console.log('store.js');
        // var method = $(this).data('method');
        // var action = $(this).data('action');
        // var form = $('#'+$(this).data('form'));
        // var apuntador = $(this).data('container');
        // $.ajax({
        //     type: method,
        //     url: action,
        //     data:$(form).serialize(),
        //     success: function(response){
        //         $(apuntador).empty();
        //         $(apuntador).load(response);
        //     }
        // });
    });
});
