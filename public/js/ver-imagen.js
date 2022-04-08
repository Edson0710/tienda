$(document).ready(function(){
    $(".ver-imagen").click(function(){
        var modal = $('#modal-imagen');
        var imagen = $(this).attr('src');
        var imagen_modal = $('#img01');
        modal.modal('toggle');
        imagen_modal.attr('src', imagen);
    });

    $(".close").click(function () {
        $("#modal-imagen").modal("hide");
    });
});
