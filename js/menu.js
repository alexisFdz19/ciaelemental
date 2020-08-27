jQuery(document).ready(function(){

    $('.clickMenu').click(function(){ 

        $('#botonMenu').addClass('collapsed');
        $('#navigation').removeClass('show');
        $("#botonMenu").attr("aria-expanded","false");

    });

});