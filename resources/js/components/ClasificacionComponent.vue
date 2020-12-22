<template>
    
    
    <table class="table text-center"><!--Creamos una tabla que mostrará todas las tareas-->
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Puntuación</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="cl in arrayClasif" :key="cl.id"> <!--Recorremos el array y cargamos nuestra tabla-->
                <td v-text="cl.nombre"></td>
                <td v-text="cl.puntos"></td> 
            </tr>
        </tbody>
    </table>
</template>

<script>
import axios from 'axios';
    export default {
        
        data(){
            return{
                name:"app",
                description:"", 
                content:"", 
                update:0,   
                arrayClasif:[{
                    nombre:"paco",
                    puntos:80
                }],
            }
        },
        methods:{
            getClasificacion(){
                const me =this;
                let url = 'clasi' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                    console.log("entra");
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    

                    me.arrayClasif=response.data;
                    console.log(me.arrayClasif);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            }
        },
        mounted() {
            console.log('Component mounted.');
            this.getClasificacion();

            setTimeout(() => console.log(this.arrayClasif), 2000);
            
        }
    }
</script>