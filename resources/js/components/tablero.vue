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
                  n !== 56 &&
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
                  n !== 56 &&
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

      <svg height="60" width="60" class="jugador1">
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="red" />
      </svg>
      <svg height="60" width="60" class="jugador2">
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="yellow" />
      </svg>
      <svg height="60" width="60" class="jugador3" v-if="numeroJugadores>=3">
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="blue" />
      </svg>
      <svg height="60" width="60" class="jugador4" v-if="numeroJugadores==4">
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="green" />
      </svg>

    </div>
    <button class="tirar" v-text="'Tirar'"  v-on:click="tirarDado" data-toggle="modal" data-target="#modalDado"></button>

    <!-- Modal dado. -->
    <div class="modal fade modalDado" id="modalDado" tabindex="-1" role="dialog" aria-labelledby="modalDado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Dado lanzado!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img id="img_dado" />
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
      nombre:"",
      apellido:"",
      arrayMujeres:[],
      arrayCategorias:["Historia","Derecho","Antropología","Geografía","Filosofía","Psicología","Economía","Sociología","Pedagogía"],
      turnosJugadores:["jugador1", "jugador2", "jugador3", "jugador4"],
      turno:0,
      numeroJugadores:3,
      jugadores:{
        jugador1:{
          posicion:1,
          puntuacion:0,
          nombre:"",
          turnosPerdidos:0,
          pozo:false
        },
        jugador2:{
          posicion:11,
          puntuacion:0,
          nombre:"",
          turnosPerdidos:4,
          pozo:true
        },
        jugador3:{
          posicion:1,
          puntuacion:0,
          nombre:"",
          turnosPerdidos:0,
          pozo:false
        },
        jugador4:{
          posicion:1,
          puntuacion:0,
          nombre:"",
          turnosPerdidos:0,
          pozo:false
        },
      },
    }
  },
  methods:{
    shuffle(a) {
      console.log("Array aleatorizado");
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
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    /* FUNCIÓN TEMPORAL. BORRAR CUANDO NO SEA NECESARIA. */
    darInfo(n){
      console.log("Numero casilla "+n);
      console.log(this.arrayMujeres[n-2].nombre+ " "+this.arrayMujeres[n-2].apellido+" "+this.arrayMujeres[n-2].imagen);
    },
    tirarDado(){
      var dado=Math.floor(Math.random() * 6)+1;
      console.log("Tiro el dado. Ha salido "+dado);
      //Se envia la imagen al modal
      var imgsrc = "../resources/img/otros/dados/dado"+dado+".svg";
      var texto= "¡Has sacado un "+dado+"!"
      $('#img_dado').attr('src',imgsrc);
      this.moverFicha(dado);
      
    },
    cambiarTurno(){
      console.log("el turnooo es "+this.turno);
      if(this.turno>=this.numeroJugadores-1){
        this.turno=0;
        console.log("AHORA EL turnooo es "+this.turno);
        this.comprobarTurnoPerdido();
        this.comprobarPozo();
        
      }else{
        this.turno=this.turno+1;
        console.log("AHORA EL turnooo es "+this.turno);
        this.comprobarTurnoPerdido();
        this.comprobarPozo();
      }
    },
    /* Comprueba si el siguiente jugador tiene turnos perdidos (debido a las casillas posada y carcel) 
    y de ser asi cambia de turno */
    comprobarTurnoPerdido(){
      if(this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos>0){
        /* console.log("tiene "+this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos+"turnos perdidos"); */
        this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos--;
        /* console.log("quedan "+this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos+"turnos perdidos"); */
        this.cambiarTurno();       
      }
    },
    comprobarPozo(){
      if(this.jugadores[this.turnosJugadores[this.turno]].pozo==true){
        console.log("hay alguien en el pozo");
        if(posJugador1<this.jugadores[this.turnosJugadores[0]].posicion || 
        posJugador2<this.jugadores[this.turnosJugadores[1]].posicion ||
        posJugador3<this.jugadores[this.turnosJugadores[2]].posicion ||
        posJugador4<this.jugadores[this.turnosJugadores[3]].posicion){
          
          this.jugadores[this.turnosJugadores[this.turno]].pozo==false;

          
        }else{
          this.cambiarTurno();
        }

      }
    },
    moverFicha(dado){
      
      this.jugadores[this.turnosJugadores[this.turno]].posicion=this.jugadores[this.turnosJugadores[this.turno]].posicion+dado; 
      console.log("El "+this.jugadores[this.turnosJugadores[this.turno]]+" esta en la posicion "+this.jugadores[this.turnosJugadores[this.turno]].posicion);
      const gridJugador = document.querySelector("."+this.turnosJugadores[this.turno]);
      gridJugador.style["grid-area"] = "c"+this.jugadores[this.turnosJugadores[this.turno]].posicion;

      /* Comprueba si el jugador ha llegado correctamente a la casilla final */
      var falta= 63-this.jugadores[this.turnosJugadores[this.turno]].posicion;
      /* console.log("Te faltan "+falta+ " casillas"); */
      if(falta==0){
        console.log("Has acabado!!!!");
      }
      else if(falta<0){
        /* console.log("Casi!!"); */
        gridJugador.style["grid-area"] = "c"+(falta+63);
        this.jugadores[this.turnosJugadores[this.turno]].posicion=(falta+63);
      }

      /* Comprueba si cae en las casillas oca, pozo, dados, posada, puente, carcel, laberinto o calavera */
      switch(this.jugadores[this.turnosJugadores[this.turno]].posicion){
        case 5: 
          gridJugador.style["grid-area"] = "c9";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=9;
          break;
        case 9: 
          gridJugador.style["grid-area"] = "c14";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=14;
          break;
        case 12: 
          /* PUENTE */
          gridJugador.style["grid-area"] = "c6";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=6;
          break;
        case 14: 
          gridJugador.style["grid-area"] = "c18";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=18;
          break;
        case 18: 
          gridJugador.style["grid-area"] = "c23";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=23;
          break;
        case 19: 
          /* POSADA */
          this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos=1;
          break;
        case 23: 
          gridJugador.style["grid-area"] = "c32";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=32;
          break;
        case 26: 
          /* DADOS */
          this.turno=this.turno-1;
          if(this.turno==-1){
            this.turno=this.numeroJugadores;
          }
          break;
        case 31: 
          /* POZO */
          this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos=4;
          this.jugadores[this.turnosJugadores[this.turno]].pozo=true;
          if(this.jugadores[this.turnosJugadores[0]].posicion<31){
            var posJugador1=this.jugadores[this.turnosJugadores[0]].posicion;
          }
          if(this.jugadores[this.turnosJugadores[1]].posicion<31){
            var posJugador2=this.jugadores[this.turnosJugadores[1]].posicion;
            
          }
          if(this.jugadores[this.turnosJugadores[2]].posicion<31){
            var posJugador3=this.jugadores[this.turnosJugadores[2]].posicion;
            
          }
          if(this.jugadores[this.turnosJugadores[3]].posicion<31){
            var posJugador4=this.jugadores[this.turnosJugadores[3]].posicion;
            
          }
      
          break;
        case 32: 
          gridJugador.style["grid-area"] = "c41";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=41;
          break;
        case 41: 
          gridJugador.style["grid-area"] = "c45";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=45;
          break;
        case 42: 
          /* LABERINTO */
          gridJugador.style["grid-area"] = "c30";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=30;
          break;
        case 45: 
          gridJugador.style["grid-area"] = "c50";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=50;
          break;
        case 50: 
          gridJugador.style["grid-area"] = "c54";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=54;
          break;
        case 53: 
          /* DADOS */
          this.turno=this.turno-1;
          if(this.turno==-1){
            this.turno=this.numeroJugadores;
          }
          break;
        case 54: 
          gridJugador.style["grid-area"] = "c59";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=59;
          break;
        case 56: 
          /* CARCEL */
          this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos=2;
          break;
        case 58: 
          /* CALAVERA */
          gridJugador.style["grid-area"] = "c1";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=1;
          break;
      }
      /* Finaliza el turno y pasa al siguiente jugador */
      this.cambiarTurno();
    },
  },
  mounted(){
    console.log('Component mounted.');
    this.cargarMujeres();
    
  }

}
</script>