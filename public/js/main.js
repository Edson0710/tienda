$(document).ready(function() {
    
    $('.js-remote-form').on('submit', function(e){
        e.preventDefault();
        var button = $('[type=submit]', $(this));
        button.attr('disabled', 'disabled');
        var url = $(this).attr('action');
        var div = $(this).attr('data-to');
        $.post(url, $(this).serialize(), function(data, status){
            var capa = $('#'+div);
            capa.empty();
            capa.html(data);
            capa.hide();
            capa.show('slow');
            button.removeAttr('disabled');
        });
    });
    $('.js-remote-a').on('click', function(e){
        e.preventDefault();
        var rel = $('#'+$(this).data('to'));
        rel.load(this.href);
    });
});