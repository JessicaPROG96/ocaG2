
$(document).ready(function(){

    $("#botonEmpezar").on( "click", function(){
        $(".formularioDivInicioJugadores").show();
        $(".divInicio").hide();
    });

    $("#modoJuego").on("change", function(){
        $("#juegoSeleccionado").text(this.value);
        $("input[name=juegoSeleccionado]").val(this.value);
    });

    $("#botonJugar").on("click",function(){
        var localStore = $("input[name=juegoSeleccionado]").val();
        localStorage.setItem("modoJuego", localStore);
    });

});
