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
        :id="'casilla' + (n = n + 1)"
        v-for="n in 61" 
        :key="n"
      >

        <div class="casillaif" v-if="
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
                  n !== 59 && 
                  arrayMujeres[n-2].imagen !==null
                ">
                
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/fotosMujeres/'+arrayMujeres[n-2].imagen+ ')' }">
          
            <!-- encabezado de la casilla -->
            
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"  v-on:click="darInfo(n)"></p>
              </div>
          

            <!-- cuerpo de la casilla -->
            
              <div class="casillaBody">
                <div class="area" :id="'area' + n">
                  <!-- <img :src="'../resources/img/fotosMujeres/'+arrayMujeres[n-2].imagen" :alt="'mujer'" style="with:100px; height:100px"/> -->
                  </div>
              </div>

            <!-- pie de la casilla -->
          
              <div class="casillaFooter" >
                <p
                  class="m-0"
                  :id="'nombreMujer'"
                  
                  v-text="arrayMujeres[n-2].nombre+' '+arrayMujeres[n-2].apellido "
                ></p>
                
              </div>
          
          </div>
        </div>
        <div class="casillaif" v-else-if=" n !== 5 &&
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
                  n !== 59 &&
                  arrayMujeres[n-2].imagen===null">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/feminismo.jpg)' }">
          
            <!-- encabezado de la casilla -->
            
              <div class="casillaHead">
                <p class="numCasilla" v-text="n" v-on:click="darInfo(n)"></p>
              </div>
              <div class="casillaFooter" >
                <p
                  class="m-0"
                  :id="'nombreMujer'"
                  
                  v-text="arrayMujeres[n-2].nombre+' '+arrayMujeres[n-2].apellido "
                ></p>
                
              </div>
          </div>
        </div>

        <div class="casillaif" v-else>

          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/goose.png)' }">
          
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
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
             <div v-if="modoJuego == 'ambitos'">
                <h1>Bienvenido a la categoria</h1>
                
    <h5> Ha seleccionado: {{ juego }}</h5>
            </div>
          </div>
        </div>
      </div>
     
    </div>

 
  </div>
</template>
<script>
import axios from 'axios';
export default {
  data(){
      return{
      juego:"",
      nombre:"",
      apellido:"",
      modoJuego:"",
      arrayMujeres:[],
      
    
    }
  },
  methods:{
    shuffle(a) {
      console.log("Me ejecuto");
      var j, x, i;
      for (i = a.length - 1; i > 0; i--) {
          j = Math.floor(Math.random() * (i + 1));
          x = a[i];
          a[i] = a[j];
          a[j] = x;
      }
      return a;
    },
    cargarMujeres(){
      let me = this;
      let url = 'mujeres';
      axios.get(url)
        .then(function (response) {
          me.arrayMujeres = response.data;
          me.shuffle(me.arrayMujeres);
          me.modoJuego = localStorage.getItem("modoJuego");
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    darInfo(n){
      console.log("Numero casilla "+n);
      console.log(this.arrayMujeres[n-2].nombre+ " "+this.arrayMujeres[n-2].apellido+" "+this.arrayMujeres[n-2].imagen);
    }
  },
  mostrar(val) {      
        for (var i = 0; i < this.options.length; i++) {
          if (this.options[i].value === val){
            this.selectedText = this.options[i].text;
            return this.options[i].text;
          }
        }
        return '';
      },
  mounted(){
      this.cargarMujeres();
      console.log('Component mounted.')
      
  }

}
</script>