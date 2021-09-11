$(document).ready(function(){
    $('#form-preguntas').on("submit", function(e){
        e.preventDefault();
        var datosString = $( this ).serialize()+'&opt=agregar_pregunta';
        $.ajax({
            type: "POST",
            url: '../apis/preguntas-respuestas.php',
            data: datosString,
            dataType: "json",
            beforeSend: function () {
                $('#boton-loading').show();
                $('#boton-form').hide();
            }
        }).done(function(data){
            if(data['response'] == 'exito'){
                swal("Exito!", "Pregunta realizada con exito!", "success");
                location.reload();
            }else{
                swal("Lo siento!", "No se pudo realizar la pregunta, intente mas tarde.", "warning");
            }
        }).fail(function( jqXHR, textStatus, errorThrown ) {
             if ( console && console.log ) {
                 console.log( "La solicitud a fallado: " +  textStatus);
                 swal("Error!", "No se pudo realizar la pregunta, intente mas tarde.", "error");
             }
            
        }).always( function() {
            $('#boton-loading').hide();
            $('#boton-form').show();
        });
    })
});