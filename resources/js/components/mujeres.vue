<template>
    <div id="app">
        <h1>Este es un componente  para mostrar información de una mujer</h1>
        <ul>
            <li> </li>
        </ul>
        {{$data}}
    </div>
</template>
 <script>
    export default{
        data() {
          return {
            mujeres:[]
          };
        },
        mounted(){
            let me = this;
            let url = 'mujeres';
            axios.get(url).then(response=>(me.mujeres = response.data))
        }
    }
 </script>