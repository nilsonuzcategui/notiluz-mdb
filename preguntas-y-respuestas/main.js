$(document).ready(function(){
    $('#form-preguntas').on("submit", function(e){
        e.preventDefault();
        datosString = $( this ).serialize();
        alert(datosString);
        $.ajax({
            type: "POST",
            url: '../preguntas.php',
            data: dataString,
            dataType: "json",
            beforeSend: function () {
             
            }
        }).done(function(data){
            if(data['response'] == 'exito'){
             
            }else{
                
            }
        }).fail(function( jqXHR, textStatus, errorThrown ) {
             if ( console && console.log ) {
                 console.log( "La solicitud a fallado: " +  textStatus);
             }
            
        }).always( function() {
            
        });
    })
});