<template>

  <div>

    <div id="tablero">
      <!-- casilla inicio -->
      <div class="casilla p-2" id="casillaInicio" :style="{ backgroundImage: 'url(../resources/img/otros/desayuno2.jpg)' }">
        <div class="row">
          <div class="col-sm-8 casillaHead">
            <p class="numCasilla" v-text="'1'"></p>
          </div>
        </div>
      </div>
      
      
      <!-- Casillas Nº 2-62 -->
      <div class="casillaNum"
        :id="'casilla' + (n = n + 1)"
        v-for="n in 61" 
        :key="n"
      >

      <!-- Modal con info de las mujeres -->
          <div class="modal fade modalInfoC" :id="'modalInfo'+n" tabindex="-1" role="dialog" aria-labelledby="modalInfo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" :id="n"  role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">{{arrayMujeres[n-2].nombre+ ' '+arrayMujeres[n-2].apellido}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-6" v-if="arrayMujeres[n-2].imagen !==null">
                      <img :src="'../resources/img/fotosMujeres/'+arrayMujeres[n-2].imagen" :alt="'mujer'"/>
                    </div>
                    <div class="col-6" v-else>
                      <img :src="'../resources/img/otros/feminismo.jpg'" :alt="'mujer'"/>
                    </div>
                    <div class="col-3">
                      <label for="nacimiento">Nacimiento:</label> <p>{{arrayMujeres[n-2].fechaNacimiento}}</p>
                    </div>
                    <div class="col-3">
                      <label for="nacimiento">Campo:</label>
                      <p>{{arrayCategorias[arrayMujeres[n-2].id_categoria-1]}}</p>
                    </div>
                  </div>

                    <label for="descripcion">Descripción:</label><p>{{arrayMujeres[n-2].descripcion}}</p>
                </div>
              </div>
            </div>
          </div>
        <!-- Casilla mujeres con foto -->
        <div class="casillaif" v-if="
                  n !== 5 &&
                  n !== 6 &&
                  n !== 9 &&
                  n !== 12 &&
                  n !== 14 &&
                  n !== 18 &&
                  n !== 19 &&
                  n !== 23 &&
                  n !== 26 &&
                  n !== 31 &&
                  n !== 32 &&
                  n !== 41 &&
                  n !== 42 &&
                  n !== 45 &&
                  n !== 50 &&
                  n !== 53 &&
                  n !== 54 &&
                  n !== 58 &&
                  n !== 59 && 
                  arrayMujeres[n-2].imagen !==null
                ">
                
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/fotosMujeres/'+arrayMujeres[n-2].imagen+ ')' }">
            <!-- encabezado de la casilla -->
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"  v-on:click="darInfo(n)" data-toggle="modal" :data-target="'#modalInfo'+n"></p>
              </div>
            <!-- cuerpo de la casilla -->
              <div class="casillaBody">
                <div class="area" :id="'area' + n">
                  <!-- <img :src="'../resources/img/fotosMujeres/'+arrayMujeres[n-2].imagen" :alt="'mujer'" style="with:100px; height:100px"/> -->
                  </div>
              </div>
            <!-- pie de la casilla -->
              <!-- <div class="casillaFooter" >
                <p
                  class="m-0"
                  :id="'nombreMujer'"
                  v-text="arrayMujeres[n-2].nombre+' '+arrayMujeres[n-2].apellido "
                ></p>  
              </div> -->
          </div>

        </div>

        <!-- Si la mujer de la casilla no tiene foto -->
        <div class="casillaif" v-else-if=" n !== 5 &&
                  n !== 6 &&
                  n !== 9 &&
                  n !== 12 &&
                  n !== 14 &&
                  n !== 18 &&
                  n !== 19 &&
                  n !== 23 &&
                  n !== 26 &&
                  n !== 31 &&
                  n !== 32 &&
                  n !== 41 &&
                  n !== 42 &&
                  n !== 45 &&
                  n !== 50 &&
                  n !== 53 &&
                  n !== 54 &&
                  n !== 58 &&
                  n !== 59 &&
                  arrayMujeres[n-2].imagen===null">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/feminismo.jpg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n" v-on:click="darInfo(n)" data-toggle="modal" :data-target="'#modalInfo'+n"></p>
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

        <!-- Casillas OCA -->
        <div class="casillaif" v-else-if=" n == 5 ||
        n == 9 ||
        n == 14 ||
        n == 18 ||
        n == 23 ||
        n == 27 ||
        n == 32 ||
        n == 36 ||
        n == 41 ||
        n == 45 ||
        n == 50 ||
        n == 54 ||
        n == 59 
        ">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/goose.png)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casillas PUENTE -->
        <div class="casillaif" v-else-if=" n == 6 || n == 12">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/puente.png)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla POSADA -->
        <div class="casillaif" v-else-if=" n == 19">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/posada2.png)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla POZO -->
        <div class="casillaif" v-else-if=" n == 31">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/pozo.jpg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla LABERINTO -->
        <div class="casillaif" v-else-if=" n == 42">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/laberinto.jpg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla CÁRCEL -->
        <div class="casillaif" v-else-if=" n == 56">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/carcel.jpg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casillas DADO -->
        <div class="casillaif" v-else-if=" n == 26 || n == 53">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/dadosFondo.png)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla CALAVERA -->
        <div class="casillaif" v-else-if=" n == 58">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(../resources/img/otros/muerte.svg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

      </div>

      <!-- casilla final -->
      <div class="casilla  p-2" id="casilla63" :style="{ backgroundImage: 'url(../resources/img/otros/desayuno.jpg)' }">
        <div class="row">
          <div class="col-sm-8 casillaHead">
            <p class="numCasilla" v-text="'63'"></p>
          </div>
        </div>
        <div class="row align-items-center justify-center-around h-100">
          <div class="col-sm-12 casillaBody">
            <div class="area" id="area63"></div>
          </div>
        </div>
      </div>


      <svg height="60" width="60" class="ficha1">
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="red" />
      </svg>
      <svg height="60" width="60" class="ficha2">
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="yellow" />
      </svg>

    </div>
    <button class="tirar" v-text="'Tirar'"  v-on:click="tirarDado"></button>

    

    <!-- <h1>Muestra los datos de una mujer</h1>
    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Foto</th>
        </tr>
      </thead>
      <tr v-for="mujer in arrayMujeres" :key="mujer.id"> 
            <td v-text="mujer.nombre"></td>
            <td v-text="mujer.apellido"></td>
            <td><img :src="'../resources/img/fotosMujeres/'+mujer.imagen" :alt="'mujer'" style="with:100px; height:100px"/></td>
        </tr>
    </table> -->
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
      arrayCategorias:["Historia","Derecho","Antropología","Geografía","Filosofía","Psicología","Economía","Sociología","Pedagogía"],
      jugador1Posicion:1,
      jugador2Posicion:1,
      jugador3Posicion:null,
      jugador4Posicion:null,
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
      axios
        .get(url)
        .then(function (response) {
          me.arrayMujeres = response.data;
          me.shuffle(me.arrayMujeres);
          console.log(me.arrayMujeres);
          
          /* console.log(me.arrayMujeres[0].nombre); */
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    darInfo(n){
      console.log("Numero casilla "+n);
      console.log(this.arrayMujeres[n-2].nombre+ " "+this.arrayMujeres[n-2].apellido+" "+this.arrayMujeres[n-2].imagen);
    },
    tirarDado(){
      var dado=Math.floor(Math.random() * 6)+1;
      console.log("Tiro el dado. Ha salido "+dado);
      this.moverFicha(dado);
    },
    moverFicha(dado){

      /* if numero de jugador */

      this.jugador1Posicion=this.jugador1Posicion+dado; 
      console.log("El jugador1 esta en la posicion "+this.jugador1Posicion);
      const gridJugador1 = document.querySelector(".ficha1");
      gridJugador1.style["grid-area"] = "c"+this.jugador1Posicion;

      /* Comprueba si el jugador ha llegado correctamente a la casilla final */
      var falta= 63-this.jugador1Posicion;
      console.log("Te faltan "+falta+ " casillas");
      if(falta==0){
        console.log("Has acabado!!!!");
      }
      else if(falta<0){
        console.log("Casi!!");
        gridJugador1.style["grid-area"] = "c"+(falta+63);
        this.jugador1Posicion=(falta+63);
      }

      /* Comprueba si cae en las casillas oca, pozo, dados, posada, puente, laberinto o calavera */
      switch(this.jugador1Posicion){
        case 5: 
          gridJugador1.style["grid-area"] = "c9";
          this.jugador1Posicion=9;
          break;
        case 9: 
          gridJugador1.style["grid-area"] = "c14";
          this.jugador1Posicion=14;
          break;
        case 12: 
          gridJugador1.style["grid-area"] = "c6";
          this.jugador1Posicion=6;
          break;
        case 14: 
          gridJugador1.style["grid-area"] = "c18";
          this.jugador1Posicion=18;
          break;
        case 18: 
          gridJugador1.style["grid-area"] = "c23";
          this.jugador1Posicion=23;
          break;
        case 19: 
          /* POSADA */
          break;
        case 23: 
          gridJugador1.style["grid-area"] = "c32";
          this.jugador1Posicion=32;
          break;
        case 26: 
          /* DADOS */
          break;
        case 31: 
          /* POZO */
          break;
        case 32: 
          gridJugador1.style["grid-area"] = "c41";
          this.jugador1Posicion=41;
          break;
        case 41: 
          gridJugador1.style["grid-area"] = "c45";
          this.jugador1Posicion=45;
          break;
        case 42: 
          /* LABERINTO */
          break;
        case 45: 
          gridJugador1.style["grid-area"] = "c50";
          this.jugador1Posicion=50;
          break;
        case 50: 
          gridJugador1.style["grid-area"] = "c54";
          this.jugador1Posicion=54;
          break;
        case 53: 
          /* DADOS */
          break;
        case 54: 
          gridJugador1.style["grid-area"] = "c59";
          this.jugador1Posicion=59;
          break;
        case 58: 
          /* CALAVERA */
          gridJugador1.style["grid-area"] = "c1";
          this.jugador1Posicion=1;
          break;



      }




    },
  },
  mounted(){
    
    this.cargarMujeres();
    console.log('Component mounted.');
  }

}
</script>