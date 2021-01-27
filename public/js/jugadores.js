
$(document).ready(function(){

    $("#botonEmpezar").on( "click", function(){
        $(".formularioDivInicioJugadores").show();
        $(".divInicio").hide();
    });

    $("#modoJuego").on("change", function(){
        $("#juegoSeleccionado").text(this.value); //cambia el texto de la p con la opción seleccionada
        $("input[name=juegoSeleccionado]").val(this.value); //coge el valor seleccionado
        // var localStore = $("input[name=juegoSeleccionado]").val();
        // localStorage.setItem("modoJuego", localStore);

        // var recoger = localStorage.getItem("modoJuego");

        // if(recoger === "Normal"){
        //     alert("pase adelante");
        // }
        // else{
        //     alert("no puede pasar");
        // }
    });
   
    $("#botonJugar").on("click",function(){
        var localStore = $("input[name=juegoSeleccionado]").val();
        localStorage.setItem("modoJuego", localStore);
    });


});
