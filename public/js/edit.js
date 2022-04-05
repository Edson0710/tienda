$(document).ready(function() {
    $('.edit').on('click', function(e){
        console.log('edit.js');
        e.preventDefault();
        var div = $(this).attr('data-to');
        var capa = $('#'+div);
        capa.empty();
        var rel = $('#'+$(this).data('to'));
        rel.empty();
        rel.load(this.href);
    });

});
