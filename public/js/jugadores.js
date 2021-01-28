
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
    
       
// validar formulario 
document.getElementById("submit").addEventListener('click', validar, false);
function validar() {
    //validar nombre
    var elemento = document.getElementById('nombre'); 
    if(elemento.value==""){
        elemento.style.border =  '3px solid red';
        error(elemento, "Debe introducir un nombre");        
    }
    else{
        nombreRegex = /^[a-zA-Z]+$/i;
        if(!nombreRegex.test(elemento.value)){
            error(elemento, "El nombre no acepta números ni caracteres especiales");
            alert("el nombre no es valido");
            elemento.style.border =  '3px solid red';
        }
    }
    //validar el apellido 
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
        }
    }
    //validar zona geográfica 
    var elemento = document.getElementById('zona');
    if(elemento.value==""){
        elemento.style.border =  '3px solid red';
        error3(elemento, "Debe introducir una zona");
    }
    else{
        nombreRegex = /^[a-zA-Z]+$/i;
        if(!nombreRegex.test(elemento.value)){
            error3(elemento, "La zona no acepta números ni caracteres especiales");
            elemento.style.border =  '3px solid red';
            alert("el nombre no es valido");
        }
    }
}
    function error(elemento, mensaje) {
            document.getElementById("mensajeError").innerHTML = mensaje;
            elemento.style.border =  '3px solid red';
            // elemento.className = "error";
        }

        function error2(elemento, mensaje) {
            document.getElementById("mensajeErrorA").innerHTML = mensaje;
            // elemento.className = "error";
            elemento.style.border =  '3px solid red';
        } 
        function error3(elemento, mensaje) {
            document.getElementById("mensajeErrorZ").innerHTML = mensaje;
            // elemento.className = "error";
            elemento.style.border =  '3px solid red';
        } 



});


