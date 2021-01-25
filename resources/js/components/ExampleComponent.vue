<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                     <ul>
                        <li v-for= "dato in arrayData" :key="dato"></li>
                        @{{dato.nombre}}
                    </ul>
                </div>
            </div>
        </div>
       
    </div>
</template>

<script>
    export default {
        data(){
            return{
                arrayData:[
                    {nombre:'Jessica', apellido:'Marroquin'}
                ]
            }
            
        },
        mounted() {
            console.log('Component mounted.')
            this.data();
        }
    }
</script>
