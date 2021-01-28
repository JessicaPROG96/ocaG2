// Este script es para la pagina de la galeria de las mujeres
// ----------------------------------------------------------|
// Cuando cargue la pagina, que ejecute las funciones
$(document).ready(function(){
    fondosCategorias();
    ModalMujer();
    seleccionarCategoria();
    $("#searchbar").on("input",buscar);
    modoAdmin();
    $('.btn-guardar').click(ajaxMujer);
    $('.btn-borrar').click(borrarMujer);
});

function seleccionarCategoria() {
    $('#ambito').on("change",function() {
        div = document.getElementsByClassName('mujer');                 // Tarjeta de la mujer
        cat = document.getElementsByClassName('categoria');             // Categoria
        categoriaSeleccionada = $('#ambito').find(":selected").text();  // Categoria seleccionada en el select

        //Si la categoria seleccionada es "Todas" mostramos todos directamente
        if (categoriaSeleccionada=="Todas") {
            for (i = 0; i < div.length; i++)
            {
                    div[i].style.display="block";
                    document.getElementsByClassName('espacio')[0].style.justifyContent="inherit";
                    div[i].style.marginRight="16.5px";
                    div[i].style.marginLeft="16.5px";
            }
        }else{
            for (i = 0; i < div.length; i++)
            {
                // Convertimos todos los nombres y la busqueda en mayusculas, para que no tengamos problemas con las mayusc. y minus.
                // Si tiene el string que tiene la barra de busqueda, lo mostramos...
                if (cat[i].innerHTML.includes(categoriaSeleccionada))
                {
                    div[i].style.display="block";
                    document.getElementsByClassName('espacio')[0].style.justifyContent="inherit";
                    div[i].style.marginRight="16.5px";
                    div[i].style.marginLeft="16.5px";
                }
                // Si no tiene el string que tiene la barra de busqueda, lo ocultamos...
                else
                {
                    div[i].style.display="none";
                }
            }
        }
    });
}

// Funcion para saber en que mujer estas clickando y que salga el modal --> (Work in progress)
function ModalMujer() {
    

    $('.mujer').on("click", function() {

        id = $(this).find('.id').text();                    // Cogemos el id

        if (localStorage.getItem("fechaUpd"+id)==null) {
            fecha = $(this).find('.fecha').text();          // Cogemos la fecha
        } else {
            fecha = localStorage.getItem("fechaUpd"+id);
        }

        if (localStorage.getItem("zonaUpd"+id)==null) {
            zona = $(this).find('.zona').text();            // Cogemos la desc
        } else {
            zona = localStorage.getItem("zonaUpd"+id);
        }

        if (localStorage.getItem("descUpd"+id)==null) {
            descr = $(this).find('.descripcion').text();    // Cogemos la zona
        } else {
            descr = localStorage.getItem("descUpd"+id);
        }

        nombre = $(this).find('.nombre').text();            // Cogemos el nombre
        apellido = $(this).find('.apellido').text();        // Cogemos el apellido
        categoria = $(this).find('.categoria').text();      // Cogemos la categoria
        imagen = $(this).find('.imagen').attr('src');       // Cogemos la ruta de la imagen

        enlace = $(this).find('.enlace').text();            // Cogemos el enlace


        localStorage.setItem("idMujer", id);                // Guardamos el id para cogerlo en otra funcion

        if (enlace.substr(0, enlace.indexOf(" "))!= "") {
            $('.enlace-btn').attr("href", enlace.substr(0, enlace.indexOf(" ")));
        }else{
            $('.enlace-btn').attr("href", enlace);
        }
        //
        // Modal
        $(".modal-title").text(nombre +" "+ apellido);      // Titulo del modal
        $(".imagen-modal").attr('src', imagen);             // Imagen
        $(".fecha-modal").val(fecha);                       // Fecha de nacimiento
        $(".zona-modal").val(zona);                         // Zona
        $(".ambito-modal").val(categoria);                  // Ambito/Categoria
        $(".desc-modal").val(descr);                        // Descripción
        $("#myModal").modal("show");                        // Mostrar el modal

    });
    $('.divBorrar').click(function(event){
        event.stopPropagation();
    });
      

}

// Funcion para la busqueda de mujeres en la galeria
function buscar() {
    let input = document.getElementById('searchbar').value; // Valor del texto escrito en la barra de busqueda
    let div = document.getElementsByClassName('mujer');     // Tarjeta de la mujer
    let nom = document.getElementsByClassName('nombre');    // Nombre de la mujer
    let ape = document.getElementsByClassName('Apellido');  // Apellido de la mujer
    for (i = 0; i < div.length; i++)
    {
        // Convertimos todos los nombres y la busqueda en mayusculas, para que no tengamos problemas con las mayusc. y minus.
        // Si tiene el string que tiene la barra de busqueda, lo mostramos...
        if (nom[i].innerHTML.toUpperCase().includes(input.toUpperCase()) || ape[i].innerHTML.toUpperCase().includes(input.toUpperCase()))
        {
            div[i].style.display="block";
            document.getElementsByClassName('espacio')[0].style.justifyContent="inherit";
            div[i].style.marginRight="16.5px";
            div[i].style.marginLeft="16.5px";
        }
        // Si no tiene el string que tiene la barra de busqueda, lo ocultamos...
        else
        {
            div[i].style.display="none";

        }
    }
}

// Funcion para poner FONDO y COLOR a las categorías
function fondosCategorias() {
    tarjeta = document.getElementsByClassName('mujer');
    categoria = document.getElementsByClassName('Categoria');
    for ( i = 0; i < tarjeta.length; i++)
    {

        if (categoria[i].innerHTML.includes("Historia")) {
            categoria[i].style.color="#dedede"
            tarjeta[i].style.background="linear-gradient(rgba(255,255,255,.6), rgba(255,255,255,.6)),url('https://image.freepik.com/free-vector/books-pattern_23-2147505407.jpg')";
        }else if (categoria[i].innerHTML.includes("Antropología")) {
            tarjeta[i].style.background="linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)),url('https://i.pinimg.com/originals/69/8f/46/698f46b245fde2f730f24ac576753725.jpg')";
        }else if (categoria[i].innerHTML.includes("Economía")) {
            tarjeta[i].style.background="linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)),url('https://as1.ftcdn.net/jpg/02/30/80/96/500_F_230809642_7WBypWIcM09LAVwn5z8fpLelVTVvAhZ8.jpg')";
        }else if (categoria[i].innerHTML.includes("Pedagogía")) {
            categoria[i].style.color="#dedede"
            tarjeta[i].style.background="linear-gradient(rgba(255,255,255,.8), rgba(255,255,255,.8)),url('https://media.istockphoto.com/vectors/vector-toys-doodle-seamless-pattern-kids-background-endless-wallpaper-vector-id640099738')";
        }else if (categoria[i].innerHTML.includes("Psicología")) {
            tarjeta[i].style.background="linear-gradient(rgba(255,255,255,.8), rgba(255,255,255,.8)),url('https://previews.123rf.com/images/juliarstudio/juliarstudio1809/juliarstudio180914652/107753637-human-brain-pattern-seamless-black-for-any-design.jpg')";
        }else if (categoria[i].innerHTML.includes("Filosofía")) {
            tarjeta[i].style.background="linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)),url('https://image.freepik.com/vector-gratis/patron-signos-interrogacion_1319-109.jpg')";
        }else if (categoria[i].innerHTML.includes("Sociología")) {
            tarjeta[i].style.background="linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)),url('https://i.pinimg.com/originals/e0/5d/bb/e05dbb8ff0914e95e7500eb630cc3ae0.jpg')";
        }else if (categoria[i].innerHTML.includes("Geografía")) {
            categoria[i].style.color="#dedede"
            tarjeta[i].style.background="linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)),url('https://i.pinimg.com/originals/dc/52/a1/dc52a1670b930c54f09038e1c653b436.png')";
        }

    }
}

function modoAdmin() {
    if (loggedIn){                                          // Esto viene de "galeria.blade.php"
        $(".btn-editar").click(function(){
            console.log("ja");
            $(".text").prop( "disabled", false );
            console.log($('.text').css("background-color"));
            $('.text').css( "border", "0.5px solid rgb(52 58 64 / 25%)");
            $('.text').css ("background-color", "rgb(29 28 28 / 14%)");
        });

        $(".btn-guardar").click(function(event) {
            $('.text').prop( "disabled", true );
            $('.text').css("background-color", "inherit");
            $('.text').css( "border", "none");
        });

        // Tarjeta de la mujer
        $('.mujer').css("height","340px");
        
    }
}

function ajaxMujer() {

    fecha = $(".fecha-modal").val();                        // Fecha de nacimiento
    zona = $(".zona-modal").val();                          // Zona
    // $(".ambito-modal").val(categoria);                   // Ambito/Categoria
    desc = $(".desc-modal").val();                           // Descripción
    id = localStorage.getItem("idMujer");
    console.log(id);


    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url: 'ajax',
        method: 'get',
        data: {
            // _token: $("meta[name='csrf-token']").attr("content"),
           'fecha': fecha,
           'zona': zona,
           'desc': desc,
           'id':id
        },        
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        },
        success:function(response){
            var arrayMujer = (response);
            console.log(arrayMujer);
            console.log(arrayMujer[0]['fechaNacimiento']);
            localStorage.setItem("fechaUpd"+arrayMujer[0]['id'],arrayMujer[0]['fechaNacimiento']);                         // Fecha de nacimiento
            localStorage.setItem("zonaUpd"+arrayMujer[0]['id'],arrayMujer[0]["zonaGeografica"]);                           // Zona
            localStorage.setItem("descUpd"+arrayMujer[0]['id'],arrayMujer[0]["descripcion"]);                              // Descripcion

        }

        });
}

function borrarMujer() {
    arraynuevo=[];
    $("input:checkbox[name=check]:checked").each(function(){
        arraynuevo.push($(this).val());
    });
    if (arraynuevo.length==0) 
    {
        alert("No has seleccionado ninguna mujer");
    }else
    {
        console.log(arraynuevo);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'ajaxb',
            method: 'get',
            data: { tuArrJson: arraynuevo},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            },
            success:function(response){
                console.log("me apetece morir");
                location.reload();

            }

            });
    }

}