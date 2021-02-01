
$(document).ready(function(){
    $("#botonEmpezar").on( "click", function(){
        $(".formularioDivInicioJugadores").show();
        $(".divInicio").hide();
    });

    $("#modoJuego").on("change", function(){
        $("#juegoSeleccionado").text(this.value); //cambia el texto de la p con la opción seleccionada
        $("input[name=juegoSeleccionado]").val(this.value); //coge el valor seleccionado
    });
   
    $("#botonJugar").on("click",function(){

        var localStore = $("input[name=juegoSeleccionado]").val();
        localStorage.setItem("modoJuego", localStore);


        var jugador1 = document.getElementById('nombreJ1').value;
        var jugador2 = document.getElementById('nombreJ2').value;
        var jugador3 = document.getElementById('nombreJ3').value;
        var jugador4 = document.getElementById('nombreJ4').value;
        jugadores=document.getElementById("jugadores").selectedIndex;

    
        if(jugadores==0){
            window.alert("No se ha seleccionado ningun jugador");
           
        }
        else if(jugadores>0){
            localStorage.nombreJ1= document.getElementById("nombreJ1").value;
            localStorage.nombreJ2= document.getElementById("nombreJ2").value;
            localStorage.nombreJ3= document.getElementById("nombreJ3").value;
            localStorage.nombreJ4= document.getElementById("nombreJ4").value;
        
            /* if(jugadores==1){
                localStorage.numeroJugadores= 1;
                if(jugador1.length==0){
                    window.alert('No se pueden dejar campos vacios');
                    
                }else{
                    window.location.replace("juego");
                }
            } */
            /* else  */if(jugadores==1){
                localStorage.numeroJugadores= 2;
                if(jugador1.length==0 && jugador2.length==0){
                    window.alert('No se pueden dejar campos vacios');
                     
                }else{
                    window.location.replace("juego");
                }
            }
            else if(jugadores==2){
                localStorage.numeroJugadores= 3;
                if(jugador1.length==0 || jugador2.length==0 || jugador3.lemgth==0){
                    window.alert('No se pueden dejar campos vacios');
                
                }else{
                    window.location.replace("juego");
                }
            }
            else if(jugadores==3){
                localStorage.numeroJugadores= 4;
                if(jugador1.length==0 || jugador2.length==0 || jugador3.lemgth==0 || jugador4.length==0){
                    window.alert('No se pueden dejar campos vacios');
                    
                }else{
                    window.location.replace("juego");
                }
            }
        }
    

       
    });

    
    $("#divJugadores").on("change",function(){
   
        getSelectValue = document.getElementById("jugadores").value;
    
        /* if(getSelectValue=="1jug"){
            document.getElementById("caja1").style.display = "inline-block";
            document.getElementById("caja2").style.display = "none";
            document.getElementById("caja3").style.display = "none";
            document.getElementById("caja4").style.display = "none";
        } else*/ if(getSelectValue=="2jug"){
            document.getElementById("caja1").style.display = "inline-block";
            document.getElementById("caja2").style.display = "inline-block";
            document.getElementById("caja3").style.display = "none";
            document.getElementById("caja4").style.display = "none";
        }else if(getSelectValue=="3jug"){
            document.getElementById("caja1").style.display = "inline-block";
            document.getElementById("caja2").style.display = "inline-block";
            document.getElementById("caja3").style.display = "inline-block";
            document.getElementById("caja4").style.display = "none";
        }else if(getSelectValue=="4jug"){
            document.getElementById("caja1").style.display = "inline-block";
            document.getElementById("caja2").style.display = "inline-block";
            document.getElementById("caja3").style.display = "inline-block";
            document.getElementById("caja4").style.display = "inline-block";
        }
    });
    
       
    // validar formulario 
    document.getElementById("submit").addEventListener('click', validar, false);
    function validar(event) {
        //validar nombre
        nombreRegex = /^[a-zA-Z]+$/i;
        var elemento = document.getElementById('nombre'); 
        if(elemento.value==""){
            elemento.style.border =  '3px solid red';
            error(elemento, "Debe introducir un nombre");    
            event.preventDefault();    
        }
        else if(!nombreRegex.test(elemento.value)){
            error(elemento, "El nombre no acepta números ni caracteres especiales");
            elemento.style.border =  '3px solid red';
            event.preventDefault();
        }
        else{
            elemento.style.border =  '3px solid green';
            msm = document.getElementById("mensajeError");
            msm.style.display = 'none';  
        }

    //validar el apellido 
    var elemento = document.getElementById('apellido'); 
    if(elemento.value==""){
        elemento.style.border =  '3px solid red';
        error1(elemento, "Debe introducir un apellido");
        event.preventDefault();
    }
    else if(!nombreRegex.test(elemento.value)){
        error1(elemento, "El apellido no acepta números ni caracteres especiales");
        elemento.style.border =  '3px solid red';
        event.preventDefault();
    } else {
        elemento.style.border =  '3px solid green';
        msm = document.getElementById("mensajeErrorA");
        msm.style.display = 'none';  
    }
    //validar fecha de nacimiento, no debe estar vacía
    var elemento = document.getElementById('fNacimiento'); 
    if(elemento.value==""){
        elemento.style.border = '3px solid red';
        fechaN(elemento, "Debe introducir una fecha de nacimiento");
        event.preventDefault();
    }
    else{
        elemento.style.border =  '3px solid green';
        msm = document.getElementById("mensajeErrorFN");
        msm.style.display = 'none';  
    }   
    //validar la descripción, no debe estar vacía
    var elemento = document.getElementById('descripcion'); 
    if(elemento.value==""){
        elemento.style.border =  '3px solid red';
        des(elemento, "Debe introducir una descripción");
        event.preventDefault();
    }
    else {
        elemento.style.border =  '3px solid green';
        msm = document.getElementById("mensajeErrorDes");
        msm.style.display = 'none';  
    }
    //validar zona geográfica 
    var elemento = document.getElementById('zona');
    if(elemento.value==""){
        elemento.style.border =  '3px solid red';
        error3(elemento, "Debe introducir una zona");
        event.preventDefault();
    }
    else if(!nombreRegex.test(elemento.value)){
            error3(elemento, "La zona no acepta números ni caracteres especiales");
            elemento.style.border =  '3px solid red';
            event.preventDefault();
        }
    else {
        elemento.style.border =  '3px solid green';
        msm = document.getElementById("mensajeErrorZ");
        msm.style.display = 'none';  
    }
}
    function error(elemento, mensaje) {  // mensaje error nombre
            document.getElementById("mensajeError").innerHTML = mensaje;
            elemento.style.border =  '3px solid red';
        }
    function error1(elemento, mensaje) { // mensaje error apellido
        document.getElementById("mensajeErrorA").innerHTML = mensaje;
        elemento.style.border =  '3px solid red';
    } 
    function fechaN(elemento, mensaje) {// mensaje error fecha nacimiento
        document.getElementById("mensajeErrorFN").innerHTML = mensaje;
        elemento.style.border =  '3px solid red';
    }
    function des(elemento, mensaje) {// mensaje error descripción
        document.getElementById("mensajeErrorDes").innerHTML = mensaje;
        elemento.style.border =  '3px solid red';
    } 
    function error3(elemento, mensaje) {// mensaje error zona geográfica
        document.getElementById("mensajeErrorZ").innerHTML = mensaje;
        elemento.style.border =  '3px solid red';
    } 
   
});


