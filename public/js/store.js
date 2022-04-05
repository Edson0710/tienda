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
                $(apuntador).html(response);
                // initComponents();
            },
            error: function(response){
                console.log('error');
            }
        });
    });


});

// function initComponents(){
//     $('#table').DataTable({
//         bDestroy: true,
//         dom: 'Bfrtip',
//         language: {
//             search: "Buscar:",
//             oPaginate: {
//                 sFirst: "Primero",
//                 sLast: "Último",
//                 sNext: "Siguiente",
//                 sPrevious: "Anterior"
//             },
//             sInfo: "Mostrando _START_ a _END_ de _TOTAL_ registros",
//         },
//         responsive: true,
//     });

// }
