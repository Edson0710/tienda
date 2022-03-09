$(document).ready(function() {
    console.log('js-remote-add.js');
    $('.js-remote-add').on('click', function(e){
        e.preventDefault();
        var div = $(this).attr('data-to');
        var capa = $('#'+div);
        capa.empty();
        var rel = $('#'+$(this).data('to'));
        rel.empty();
        rel.load(this.href);
    });
});