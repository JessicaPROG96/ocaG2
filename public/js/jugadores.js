
$(document).ready(function(){
    var enviar = document.getElementById("submit");
        enviar.addEventListener('click', validar, true);
        function validar() {
            var elemento = document.getElementById('nombre'); 
            if (!elemento.checkValidity()) {
                if (elemento.validity.valueMissing) {
                    error2(elemento, "Debe introducir un nombre")
                }
                if (elemento.validity.patternMismatch) {
                    error2(elemento, "El nombre debe tener entre 2 y 15 caracteres");
                }
                //error(elemento);
                return false;
            }
           
            apellidos = document.getElementById('apellido');
            if(apellidos.value==""){ 
                apellidos.style.border =  '3px solid red';
            }else{ 
                apellidoRegex = /^[A-Z ]+$/i;
                if(!apellidoRegex.test(apellidos.value)){
                    alert("el apellidos no es valido");
                    apellidos.focus();
                }
            }
            function error2(elemento, mensaje) {
                document.getElementById("mensajeError").innerHTML = mensaje;
                elemento.className = "error";
                elemento.focus();
            }
        }

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

    //VALIDACION DE FORMULARIO 
        // $("#submit").on("click", function() {
        //     $("input").hide();
        // });
    
        // $("#nombre").on("focus", function(){
        //     alert("Bye! You now leave p1!");
        // });

   
            
});



