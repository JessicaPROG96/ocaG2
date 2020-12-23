<template>

    <div class="container container-clasi">
        <div class="row">
            <div class="col-md-6">
                <h2>Clasificación</h2>
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
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return{
                name:"app",
                description:"", 
                content:"", 
                update:0,   
                arrayClasif:[],
            }
        },
        methods:{
            getClasificacion(){
                const me =this;
                let url = 'clasi' 
                axios.get(url).then(function (response) {
                    me.arrayClasif=response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            }
        },
        mounted() {
            this.getClasificacion();
        }
    }
</script>