$(document).ready(function() {
    // $('.js-remote').click(function(){
    //     let method = $(this).data('method');
    //     let action = $(this).data('action');
    //     let form = $(this).data('form');
    //     let apuntador = $(this).data('container');
    //     let tiempo = 500;
    //     $.ajax({
    //         type: method,
    //         url: action,
    //         data: $(form).serialize(),
    //         dataType: 'html',
    //         success: function (response) {
    //                 setTimeout(function(){
    //                     $(apuntador).empty();
    //                     $(apuntador).html(response);
    //                 },tiempo);
    //         },
    //     });
    // });
    $('.js-remote-form').on('click', function(e){
        e.preventDefault();
        var url = $(this).attr('action');
        var div = $(this).attr('data-to');
        $.post(url, $(this).serialize(), function(data, status){
            var capa = $('#'+div);
            capa.empty();
            capa.html(data);
            capa.hide();
            capa.show('slow');
        });
    });
    $('.js-remote-a').on('click', function(e){
        e.preventDefault();
        var rel = $('#'+$(this).data('to'));
        rel.load(this.href);
    });
});