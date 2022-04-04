$(document).ready(function() {
    $('.create').on('click', function(e){
        console.log('create.js');
        e.preventDefault();
        var div = $(this).attr('data-to');
        var capa = $('#'+div);
        capa.empty();
        var rel = $('#'+$(this).data('to'));
        rel.empty();
        rel.load(this.href);
    });
});
