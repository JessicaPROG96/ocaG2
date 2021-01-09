


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


document.getElementById("agregarTarea").addEventListener('click', cogerDatos, false);

function cogerDatos(){
    console.log("entra");
    var cod = document.getElementById("modoJuego").value;
    console.log(cod);
    alert(cod);
}

var vm = new Vue({
    el: '#juego',
    data: {
        modo:""
    },
    methods:{}
});