/* Este segmento indica: Cuando el documento este listo que sigua las siguientes instrucciones*/
$(Document).ready(function(){
    /* */
    $("#fcontact").submit(function( Event ){
        Event.preventDefault();
        $.ajax({
            type: 'POST', 
            url: 'enviar.php',
            data: $(this).serialize(),
            success: function(data){
                $("#respuesta").slideDown();
                $("#respuesta").html(data);
            }
        })
        return false;
    });
});