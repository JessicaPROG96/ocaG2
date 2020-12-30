<template>
  <div>
      <!-- espacio para jugadores -->
    <div class="jugador">
      <div class="row row-cols-1">
        <div class="col">
          <h6>Jugador 1</h6>
        </div>
        <div class="col">
          <h6>Jugador 2</h6>
        </div>
        <div class="col">
          <h6>Jugador 3</h6>
        </div>
        <div class="col">
          <h6>Jugador 4</h6>
        </div>
      </div>
    </div>
<!-- boton para iniciar una partida -->
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary" id="btnInciar">Iniciar Partida</button>
    </div>
<!-- seleccionar una categoría -->
    <div class="form-group">
      <select class="custom-select" id="secCategoria" v-model="categoria">
        <option disabled selected value="">Seleccione una categoría</option>
        <option
          v-for="ambito in arrayAmbitos"
          :key="ambito.id"
          v-text="ambito.nombreCategoria"
        ></option>
      </select>
    </div>
  </div>
</template>
<script>
export default {
    data(){
        return{
            id: "", 
            nombreCategoria:"", 
            color:"",
            arrayAmbitos: []
        }
    }, 
    methods:{
        categoria(){
            let me = this;
            axios.get('categorias').then(function (response) {
                me.arrayAmbitos = response.data;
            }).catch(function (error) {
                console.log(error);
            });
        }
    }, 
    mounted() {
        this.categoria();
    }
};
</script>