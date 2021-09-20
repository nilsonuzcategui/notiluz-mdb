$(document).ready(function () {
    var string = '';
    var inicio = 0;
    var limite = 5;
    buscarNoticias(inicio, limite);

    $('#botonVerMas').on('click', function () {
        inicio = (inicio + 5);
        buscarNoticias(inicio, limite);
    });

    function buscarNoticias(inicio, limite) {
        $('#loadingForm').show();
        $('#botonVerMas').hide();

        var numeroResultado = 0;
        $.ajax({
            type: "POST",
            url: "../apis/noticias.php",
            data: {
                opt: 'noticia_inicio',
                pais: string,
                inicio: inicio,
                limite: limite,
            },
            dataType: "json",
        }).done(function (data) {
            if (data['response'] == 'exito') {
                $('#contenedor_noticias').append(data['html']);
            }
            numeroResultado = data['numFilas'];

        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                console.log("La solicitud a fallado: " + textStatus);
            }
            swal("Disculpe!", "Asegurese de tener una buena conexion a internet!", "warning");
        }).always(function () {
            if (numeroResultado < limite) { //no hay mas resultados
                $('#no_mas_resultados').show();
                if (numeroResultado == 0 && inicio == 0) {
                    $('#no_resultado_mas').hide();
                }
                $('#loadingForm').hide();
                $('#botonVerMas').hide();
            } else {
                $('#loadingForm').hide();
                $('#botonVerMas').show();
            }
        });
    }
});