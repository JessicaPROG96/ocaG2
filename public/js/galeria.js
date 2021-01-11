// Este script es para la pagina de la galeria de las mujeres


// Cuando la pagina este cargada, que ejecute la funcion "buscar"
$(document).ready(function(){
    cargarPattern();
    $("#searchbar").on("input",buscar);    
});


// Funcion para la busqueda de mujeres en la galeria 
function buscar() {
    let input = document.getElementById('searchbar').value;
    let div = document.getElementsByClassName('mujer');
    let nom = document.getElementsByClassName('nombre');
    let ape = document.getElementsByClassName('Apellido');
    for (i = 0; i < div.length; i++) 
    {  
        if (!nom[i].innerHTML.includes(input) && !ape[i].innerHTML.includes(input)) { 
            div[i].style.display="none"; 
        } 
        else { 
            div[i].style.display="block";                  
            document.getElementsByClassName('espacio')[0].style.justifyContent="inherit";  
            div[i].style.marginRight="16.5px";
            div[i].style.marginLeft="16.5px";                      
        } 
    } 
}

function cargarPattern() {
    tarjeta = document.getElementsByClassName('mujer');
    categoria = document.getElementsByClassName('Categoria');
    for ( i = 0; i < tarjeta.length; i++) {
        console.log(categoria);
        if (categoria[i].innerHTML.includes("Historia")) {
            categoria[i].style.background="rgba(177, 63, 29, 0.930)" 
            tarjeta[i].style.backgroundImage="url('https://image.freepik.com/free-vector/books-pattern_23-2147505407.jpg')";
        }else if (categoria[i].innerHTML.includes("Antropología")) {
            categoria[i].style.background="rgba(240, 174, 75, 0.89)" 
            tarjeta[i].style.backgroundImage="url('https://i.pinimg.com/originals/69/8f/46/698f46b245fde2f730f24ac576753725.jpg')";
        }

        
    }
}