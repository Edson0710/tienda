$('#table').DataTable({
    bDestroy: true,
    dom: 'Bfrtip',
    language: {
        search: "Buscar:",
        oPaginate: {
            sFirst: "Primero",
            sLast: "Último",
            sNext: "Siguiente",
            sPrevious: "Anterior"
        },
        sInfo: "Mostrando _START_ a _END_ de _TOTAL_ registros",
    },
    responsive: true,
});

$('#table2').DataTable({
    bDestroy: true,
    dom: 'Bfrtip',
    language: {
        search: "Buscar:",
        oPaginate: {
            sFirst: "Primero",
            sLast: "Último",
            sNext: "Siguiente",
            sPrevious: "Anterior"
        },
        sInfo: "Mostrando _START_ a _END_ de _TOTAL_ registros",
    },
    responsive: true,
    pageLength: 3,
});
