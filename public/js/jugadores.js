
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

    //VALIDACION DE FORMULARIO 
        // $("#submit").on("click", function() {
        //     $("input").hide();
        // });
    
        // $("#nombre").on("focus", function(){
        //     alert("Bye! You now leave p1!");
        // });

   
    var enviar = document.getElementById("submit");
        enviar.addEventListener('click', validar, true);

        //validar nombre 
        function validar() {
            var elemento = document.getElementById('nombre'); 
            if(elemento.value==""){
                elemento.style.border =  '3px solid red';
                error(elemento, "Debe introducir un nombre");
            }
            else{
                nombreRegex = /^[a-zA-Z]+$/i;
                if(!nombreRegex.test(elemento.value)){
                    error(elemento, "El nombre no acepta números ni caracteres especiales");
                    elemento.style.border =  '3px solid red';
                    // elemento.focus();
                }
            }
            var elemento = document.getElementById('apellido'); 
            if(elemento.value==""){
                elemento.style.border =  '3px solid red';
                error2(elemento, "Debe introducir un dato");
            }
            else{
                nombreRegex = /^[a-zA-Z]+$/i;
                if(!nombreRegex.test(elemento.value)){
                    error2(elemento, "El apellido no acepta números ni caracteres especiales");
                    elemento.style.border =  '3px solid red';
                    // elemento.focus();
                }
            }
            var elemento = document.getElementById('descripcion'); 
            nombreRegex = /^[a-zA-Z0-9]+$/i;
            

        }

        function error(elemento, mensaje) {
            document.getElementById("mensajeError").innerHTML = mensaje;
            elemento.style.border =  '3px solid red';
            // elemento.className = "error";
            // elemento.focus();
        }

        function error2(elemento, mensaje) {
            document.getElementById("mensajeErrorA").innerHTML = mensaje;
            // elemento.className = "error";
            elemento.style.border =  '3px solid red';
            // elemento.focus();
        }        
});



