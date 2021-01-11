// Este script es para la pagina de la galeria de las mujeres

function b() {
    let input = document.getElementById('searchbar').value;
    let div = document.getElementsByClassName('mujer');
    let nom = document.getElementsByClassName('nombre');
    let ape = document.getElementsByClassName('Apellido');
    for (i = 0; i < div.length; i++) {  
                if (!nom[i].innerHTML.includes(input) && !ape[i].innerHTML.includes(input)) { 
                    div[i].style.display="none"; 
                } 
                else { 
                    div[i].style.display="block";                  
                } 
            } 
}


function a() {          
    $("#searchbar").on("input",b);           
};

$(document).ready(function(){
    a();
});
