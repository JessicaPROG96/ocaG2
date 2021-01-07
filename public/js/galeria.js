// Este script es para la pagina de la galeria de las mujeres

// function buscar(){ 
//     let input = document.getElementById('searchbar').value 
//     let x = document.getElementsByClassName('nombre'); 
//     for (i = 0; i < x.length; i++) {  
//         if (!x[i].innerHTML.toLowerCase().includes(input)) { 
//             x[i].style.display="none"; 
//         } 
//         else { 
//             x[i].style.display="list-item";                  
//         } 
//     } 

// };
function b() {
    let input = document.getElementById('searchbar').value;
    let div = document.getElementsByClassName('mujer');
    let h4 = document.getElementsByClassName('nombre');
    for (i = 0; i < div.length; i++) {  
                if (!h4[i].innerHTML.includes(input)) { 
                    div[i].style.display="none"; 
                } 
                else { 
                    div[i].style.display="list-item";                  
                } 
            } 
}


function a() {
    // $("#searchbar").on( "change",'input', b);           
    $("#searchbar").change(b);           
};

$(document).ready(function(){
    a();
});
