$(document).ready(function(){
    $('#form-preguntas').on("submit", function(e){
        e.preventDefault();
        datosString = $( this ).serialize();
        alert(datosString);
    })
});