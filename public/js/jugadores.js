// $(document).ready(function(){
//     $("#botonEmpezar").click(function(){
//         $(".formularioDivInicioJugadores").slideDown(500);
//     });
// });

$(document).ready(function(){
    $("#botonEmpezar").on( "click", function(){
        $(".formularioDivInicioJugadores").show();
    });
    $("#botonEmpezar").on( "click", function(){
        $(".divInicio").hide();
    });
});
