<template>

    <div class="container container-clasi mx-10">
        <div class="row">
            <div class="mx-auto mt-5 col-12">
                <h2 id="tituloClas">Clasificación</h2>
                
                <table class="table text-center table-dark table-hover" id="tabla"><!--Creamos una tabla que mostrará todas las tareas-->
                    <thead>
                        <tr class="encabezado">
                            <th scope="col">Nombre</th>
                            <th scope="col">Puntuación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="cl in arrayClasif" :key="cl.id" class="filasTabla" > <!--Recorremos el array y cargamos nuestra tabla-->
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