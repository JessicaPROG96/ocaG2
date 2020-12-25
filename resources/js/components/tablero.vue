<template>
  <div>
    <div id="tablero">
      <!-- casilla inicio -->
      <div class="casilla p-2" id="casillaInicio">
        <div class="row">
          <div class="col-sm-8 casillaHead">
            <p class="numCasilla" v-text="'1'"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 casillaBody">
            <h2>Hola mundo</h2>
            <div
              class="area d-flex align-items-center justify-content-around"
              id="area1"
            >
              Hola otra vez
            </div>
          </div>
        </div>
      </div>
      <!-- otras casillas -->
      <div
        class="casilla casillaJuego px-2 py-2 text-center"
        :id="'casilla' + (n = n + 1)"
        v-for="n in 61"
        :key="n"
      >
        <!-- encabezado de la casilla -->
        <div class="row">
          <div class="col-sm-8 casillaHead">
            <p class="numCasilla" v-text="n"></p>
          </div>
        </div>
        <!-- cuerpo de la casilla -->
        <div class="row">
          <div class="col-sm-12 casillaBody">
            <div class="area" :id="'area' + n"></div>
          </div>
        </div>
        <!-- pie de la casilla -->
        <div class="row">
          <div class="col-sm-12 casillaFooter">
            <p
              class="m-0"
              :id="'nombreMujer'"
              v-if="
                n !== 5 &&
                n !== 6 &&
                n !== 9 &&
                n !== 12 &&
                n !== 14 &&
                n !== 18 &&
                n !== 19 &&
                n !== 23 &&
                n !== 27 &&
                n !== 31 &&
                n !== 32 &&
                n !== 41 &&
                n !== 42 &&
                n !== 45 &&
                n !== 50 &&
                n !== 52 &&
                n !== 54 &&
                n !== 58 &&
                n !== 59
              "
              v-text="''"
            ></p>
          </div>
        </div>
      </div>
      <!-- casilla normas -->
      <div class="casillaNormas p-2" id="casillaNormas">
        <div class="row align-items-center justify-content-center h-100">
          <div class="col"></div>
        </div>
      </div>
      <!-- casilla final -->
      <div class="casilla p-2" id="casillaFinal">
        <div class="row">
          <div class="col-sm-8 casillaHead">
            <p class="numCasilla" v-text="'63'"></p>
          </div>
          <!-- <div class="col-sm-4 casillaHead"><button class="pregunta" v-text="'?'"></button></div> -->
        </div>
        <div class="row align-items-center justify-center-around h-100">
          <div class="col-sm-12 casillaBody">
            <div class="area" id="area63"></div>
          </div>
        </div>
      </div>
    </div>
    <h1>Muestra los datos de una mujer</h1>
    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
        </tr>
      </thead>
      <tr v-for="mujer in arrayMujeres" :key="mujer.id"> <!--Recorremos el array y cargamos nuestra tabla-->
            <td v-text="mujer.nombre"></td>
            <td v-text="mujer.apellido"></td>
        </tr>
    </table>
  </div>
</template>
<script>
import axios from 'axios';
export default {
  data(){
      return{
      nombre:"",
      apellido:"",
        arrayMujeres:[],
    }
  },
  methods:{
    cargarMujeres(){
      let me = this;
      let url = 'mujeres';
      axios
        .get(url)
        .then(function (response) {
          me.arrayMujeres = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    }
  },
  mounted(){
      this.cargarMujeres();
      console.log('Component mounted.')
  }

}
</script>