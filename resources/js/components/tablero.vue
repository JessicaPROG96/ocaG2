<template>

  <div>

    <div id="tablero">
      <!-- casilla inicio -->
      <div class="casilla p-2" id="casillaInicio" :style="{ backgroundImage: 'url(img/otros/desayuno2.jpg)' }">
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

        <!-- Casilla mujeres -->
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
                
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/fotosMujeres/'+arrayMujeres[n-2].imagen+ ')' }">
            <!-- encabezado de la casilla -->
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"  v-on:click="darInfo(n)"></p>
              </div>
            <!-- cuerpo de la casilla -->
              <div class="casillaBody">
                <div class="area" :id="'area' + n">
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
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/otros/goose.png)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casillas PUENTE -->
        <div class="casillaif" v-else-if=" n == 6 || n == 12">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/otros/puente.png)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla POSADA -->
        <div class="casillaif" v-else-if=" n == 19">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/otros/posada2.png)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla POZO -->
        <div class="casillaif" v-else-if=" n == 31">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/otros/pozo.jpg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla LABERINTO -->
        <div class="casillaif" v-else-if=" n == 42">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/otros/laberinto.jpg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla CÁRCEL -->
        <div class="casillaif" v-else-if=" n == 56">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/otros/carcel.jpg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casillas DADO -->
        <div class="casillaif" v-else-if=" n == 26 || n == 53">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/otros/dadosFondo.png)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>

        <!-- Casilla CALAVERA -->
        <div class="casillaif" v-else-if=" n == 58">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/otros/muerte.svg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
          </div>
        </div>


      </div>

      <!-- casilla final -->
      <div class="casilla  p-2" id="casilla63" :style="{ backgroundImage: 'url(img/otros/desayuno.jpg)' }">
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
    <button class="tirar" v-text="'Tirar'"  v-on:click="tirarDado"></button>

    <!-- Modal dado. -->
    <div class="modal fade modalDado" id="modalDado" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalDado" aria-hidden="true">
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


    <!-- Modal orden turnos. -->
    <div class="modal fade modalTurnos" id="modalTurnos" tabindex="-1" role="dialog" aria-labelledby="modalTurno" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Orden de los turnos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
            <p v-text="this.jugadores[this.turnosJugadores[0]].nombre" ></p>
            <p v-text="this.jugadores[this.turnosJugadores[1]].nombre" ></p>
            <p v-text="this.jugadores[this.turnosJugadores[2]].nombre" ></p>
            <p v-text="this.jugadores[this.turnosJugadores[3]].nombre" ></p>
          </div>
          
        </div>
      </div>
    </div>


    <!-- Modal casilla caida -->
    <div class="modal fade modalCasillaCaida" id="modalCasillaCaida" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalCasillaCaida" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img :src="this.arrayCasillasModal[this.tipoCasillas[numeroCasillaCaida]].img" alt="casilla"> 
            <p v-text="this.arrayCasillasModal[this.tipoCasillas[numeroCasillaCaida]].texto"></p>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Modal pregunta -->
    <div class="modal fade modalPregunta" id="modalPregunta" v-if="!loading" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalPregunta" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLongTitle" v-text="this.arrayPreguntas[this.randPregunta].pregunta"></h3>
          </div>
          <div class="modal-body">
            <button id="btn1" class="btn btn-primary" v-on:click="corregirPregunta(arrayOpciones[0], 1 )">{{this.arrayOpciones[0]}}</button>
            <button id="btn2" class="btn btn-primary" v-on:click="corregirPregunta(arrayOpciones[1], 2)">{{this.arrayOpciones[1]}}</button>
            <button id="btn3" class="btn btn-primary" v-on:click="corregirPregunta(arrayOpciones[2], 3)">{{this.arrayOpciones[2]}}</button>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Modal con info de las mujeres -->
      <div class="modal fade modalInfoC" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" :id="this.numeroMujer"  role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">{{this.arrayMujeres[this.numeroMujer].nombre+ ' '+this.arrayMujeres[this.numeroMujer].apellido}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-6">
                  <img :src="'img/fotosMujeres/'+this.arrayMujeres[this.numeroMujer].imagen" :alt="'mujer'"/>
                </div>
          
                <div class="col-3">
                  <label for="nacimiento">Nacimiento:</label> <p>{{this.arrayMujeres[this.numeroMujer].fechaNacimiento}}</p>
                </div>
                <div class="col-3">
                  <label for="nacimiento">Campo:</label>
                  <p>{{this.arrayCategorias[this.arrayMujeres[this.numeroMujer].id_categoria-1]}}</p>
                </div>
              </div>
              <label for="descripcion">Descripción:</label><p>{{this.arrayMujeres[this.numeroMujer].descripcion}}</p>

              
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
      loading:false,
      arrayMujeres:[],
      arrayPreguntas:[],
      arrayOpciones:[],
      numeroMujer:0,
      randPregunta:0,
      arrayCategorias:["Historia","Derecho","Antropología","Geografía","Filosofía","Psicología","Economía","Sociología","Pedagogía"],
      numeroCasillaCaida:0,
      arrayCasillasModal:{
        oca:{
          texto:"¡De oca a oca y tiro porque me toca!",
          img:"img/otros/goose.png"
        },
        puente:{
          texto:"De puente a puente porque me lleva la corriente",
          img:"img/otros/puente.png"
        },
        posada:{
          texto:"Pierdes un turno",
          img:"img/otros/posada2.png"
        },
        carcel:{
          texto:"Pierdes dos turnos",
          img:"img/otros/carcel.jpg"
        },
        pozo:{
          texto:"Atrapado hasta que pase otro jugador o pasen 4 turnos",
          img:"img/otros/pozo.jpg"
        },
        dados:{
          texto:"¡Vuelves a tirar!",
          img:"img/otros/dadosFondo.png"
        },
        laberinto:{
          texto:"Vuelves a la casilla 30",
          img:"img/otros/laberinto.jpg"
        },
        calavera:{
          texto:"Vuelves al principio",
          img:"img/otros/muerte.svg"
        },
        final:{
          texto:"¡Enhorabuena, has acabado!",
          img:"img"
        },
      },
      turnosJugadores:["jugador1", "jugador2", "jugador3", "jugador4"],
      tipoCasillas:["oca", "puente", "posada", "carcel", "pozo", "dados", "laberinto", "calavera", "final"],
      turno:0,
      numeroJugadores:4,
      posJugador1:1,
      posJugador2:1,
      posJugador3:1,
      posJugador4:1,
      jugadores:{
        jugador1:{
          posicion:1,
          puntuacion:0,
          nombre:"Pepe",
          turnosPerdidos:0,
          pozo:false
        },
        jugador2:{
          posicion:1,
          puntuacion:0,
          nombre:"Pepi",
          turnosPerdidos:0,
          pozo:true
        },
        jugador3:{
          posicion:1,
          puntuacion:0,
          nombre:'alfredo',
          turnosPerdidos:0,
          pozo:false
        },
        jugador4:{
          posicion:1,
          puntuacion:0,
          nombre:'',
          turnosPerdidos:0,
          pozo:false
        },
      },
    }
  },
  methods:{
    //Función para aleatorizar arrays
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
    //Función para obtener el nombre de un objeto en un array
    getKeyByValue(object, value) {
      return Object.keys(object).find(key => object[key] === value);
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
    cargarPreguntas(){
      this.loading = false;
      let me = this;
      let url = 'preguntas';
      axios
        .get(url)
        .then(function (response) {
          me.arrayPreguntas = response.data;
          /* me.shuffle(me.arrayPreguntas); */
          console.log(me.arrayPreguntas);
          
        })
        .catch(function (error) {
          console.log(error);
        });

    },
    darInfo(n){

      console.log("Numero casilla "+n);
      console.log(this.arrayMujeres[n-2].nombre+ " "+this.arrayMujeres[n-2].apellido+" "+this.arrayMujeres[n-2].imagen);
      this.numeroMujer=n-2;
      $('#modalInfo').modal('show');
    },
    tirarDado(){
      var dado=Math.floor(Math.random() * 6)+1;
      console.log("Tiro el dado. Ha salido "+dado);
      //Se envia la imagen al modal.
      var imgsrc = "img/otros/dados/dado"+dado+".svg";
      var texto= "¡Has sacado un "+dado+"!"
      $('#img_dado').attr('src',imgsrc);
      //Se abre el modal con la imagen del dado.
      $('#modalDado').modal('show');
      //Cierre automatico del modal en 3 segundos.
      //Cuando el modal se cierra, se mueve la ficha.
      var me=this;
      setTimeout(function(){$('#modalDado').modal('hide'); me.moverFicha(dado);  }, 3000); 
    },
    cambiarTurno(){
      console.log("el turnooo era "+this.turno);
      if(this.turno>=this.numeroJugadores-1){
        this.turno=0;
        console.log("AHORA EL turnooo es "+this.turno);
        this.comprobarTurnoPerdido();
        
      }else{
        this.turno=this.turno+1;
        console.log("AHORAAA EL turnooo es "+this.turno);
        this.comprobarTurnoPerdido();
        
      }
    },
    volverATirar(){
      this.turno=this.turno-1;
      if(this.turno==-1){
        this.turno=this.numeroJugadores-1;
      }
      console.log("Turno deeee "+this.turno);

    },
    /* Comprueba si el siguiente jugador tiene turnos perdidos (debido a las casillas posada y carcel) 
    y de ser asi cambia de turno */
    comprobarTurnoPerdido(){
      if(this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos>0){
        console.log("tiene "+this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos+"turnos perdidos");
        this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos--;
        console.log("quedan "+this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos+"turnos perdidos");
        this.comprobarPozo();
         
        this.cambiarTurno();     
      }
      else if(this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos==0){
        this.jugadores[this.turnosJugadores[this.turno]].pozo=false;
      }
    },
    /* Si hay alguien en el pozo comprobamos si algun jugador ha pasado por esa casilla y de ser asi se libera */
    comprobarPozo(){
      if(this.jugadores[this.turnosJugadores[this.turno]].pozo==true){
        if(this.posJugador1<this.jugadores[this.turnosJugadores[0]].posicion && this.jugadores[this.turnosJugadores[0]].posicion>11 || 
        this.posJugador2<this.jugadores[this.turnosJugadores[1]].posicion && this.jugadores[this.turnosJugadores[1]].posicion>11 ||
        this.posJugador3<this.jugadores[this.turnosJugadores[2]].posicion && this.jugadores[this.turnosJugadores[2]].posicion>11 ||
        this.posJugador4<this.jugadores[this.turnosJugadores[3]].posicion && this.jugadores[this.turnosJugadores[3]].posicion>11 ){

          this.jugadores[this.turnosJugadores[this.turno]].pozo=false;
          this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos=0;
          console.log("usuario liberado!!");    
        }

      }

    },
    moverFicha(dado){
      
      this.jugadores[this.turnosJugadores[this.turno]].posicion=this.jugadores[this.turnosJugadores[this.turno]].posicion+dado; 
      console.log("estamos en turno "+this.turno);
      console.log("El "+this.jugadores[this.turnosJugadores[this.turno]]+" esta en la posicion "+this.jugadores[this.turnosJugadores[this.turno]].posicion);
      this.numeroMujer=this.jugadores[this.turnosJugadores[this.turno]].posicion-2;
      
      const gridJugador = document.querySelector("."+this.turnosJugadores[this.turno]);
      gridJugador.style["grid-area"] = "c"+this.jugadores[this.turnosJugadores[this.turno]].posicion;

      /* Comprueba si el jugador ha llegado correctamente a la casilla final */
      var falta= 63-this.jugadores[this.turnosJugadores[this.turno]].posicion;
      /* console.log("Te faltan "+falta+ " casillas"); */
      if(falta==0){
        console.log("Has acabado!!!!");
        this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos=9999;
      }
      else if(falta<0){
        /* console.log("Casi!!"); */
        gridJugador.style["grid-area"] = "c"+(falta+63);
        this.jugadores[this.turnosJugadores[this.turno]].posicion=(falta+63);
      }

      /* Comprueba si cae en las casillas oca, pozo, dados, posada, puente, carcel, laberinto o calavera */
      switch(this.jugadores[this.turnosJugadores[this.turno]].posicion){
        case 5: 
        var me=this;
        this.numeroCasillaCaida=0;
        setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
        setTimeout(function(){
          $('#modalCasillaCaida').modal('hide'); 
          gridJugador.style["grid-area"] = "c9";
          me.jugadores[me.turnosJugadores[me.turno]].posicion=9;
          console.log("posicion del jugadorrrr "+me.jugadores[me.turnosJugadores[me.turno]].posicion);
          me.volverATirar();
          
        }, 3500);
          break;
        case 6: 
          /* PUENTE */
          var me=this;
          this.numeroCasillaCaida=1;
          setTimeout(function(){$('#modalCasillaCaida').modal('show');}, 500); 
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');
            gridJugador.style["grid-area"] = "c12";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=12;
            console.log("posicion del jugadorrrr "+me.jugadores[me.turnosJugadores[me.turno]].posicion);
            
          }, 3500);
          
          
          /* $('#myModal').on('hide.bs.modal', function (e) {}) */
          break;
        case 9: 
          var me=this;
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide'); 
            gridJugador.style["grid-area"] = "c14";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=14;
            me.volverATirar();
            }, 3500);
          break;
        case 12: 
          /* PUENTE */
          var me=this;
          this.numeroCasillaCaida=1;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');
            gridJugador.style["grid-area"] = "c6";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=6; 
             }, 3500);
          break;
        case 14: 
          var me=this;
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            gridJugador.style["grid-area"] = "c18";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=18;
            me.volverATirar();
            }, 3500);
          break;
        case 18: 
          var me=this;
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);   
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            gridJugador.style["grid-area"] = "c23";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=23;
            me.volverATirar();
            }, 3500);
          break;
        case 19: 
          /* POSADA */
          var me=this;
          this.numeroCasillaCaida=2;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500); 
          setTimeout(function(){ 
            $('#modalCasillaCaida').modal('hide');  
            me.jugadores[me.turnosJugadores[me.turno]].turnosPerdidos=1;
            }, 3500);
          break;
        case 23: 
          var me=this;
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500); 
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            gridJugador.style["grid-area"] = "c32";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=32;
            me.volverATirar();
          }, 3500);
          break;
        case 26: 
          /* DADOS */
          var me=this;
          this.numeroCasillaCaida=5;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500); 
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            me.volverATirar();
            }, 3500);
          break;
        case 31: 
          /* POZO */
          var me=this;
          this.numeroCasillaCaida=4;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500); 
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide'); 
            me.jugadores[me.turnosJugadores[me.turno]].turnosPerdidos=4;
            me.jugadores[me.turnosJugadores[me.turno]].pozo=true;
            if(me.jugadores[me.turnosJugadores[0]].posicion<31){
              me.posJugador1=me.jugadores[me.turnosJugadores[0]].posicion;
            }
            if(me.jugadores[me.turnosJugadores[1]].posicion<31){
              me.posJugador2=me.jugadores[me.turnosJugadores[1]].posicion;
            }
            if(me.jugadores[me.turnosJugadores[2]].posicion<31){
              me.posJugador3=me.jugadores[me.turnosJugadores[2]].posicion;
            }
            if(me.jugadores[me.turnosJugadores[3]].posicion<31){
              me.posJugador4=me.jugadores[me.turnosJugadores[3]].posicion;
            }
          }, 3500);
          break;
        case 32: 
          var me=this;
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500); 
          setTimeout(function(){ 
            $('#modalCasillaCaida').modal('hide'); 
            gridJugador.style["grid-area"] = "c41";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=41;
            me.volverATirar();
          }, 3500);
          break;
        case 41: 
          var me=this;
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            gridJugador.style["grid-area"] = "c45";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=45;
            me.volverATirar();
            }, 3500);
          break;
        case 42: 
          /* LABERINTO */
          var me=this;
          this.numeroCasillaCaida=6;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            gridJugador.style["grid-area"] = "c30";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=30;
            }, 3500);
          break;
        case 45: 
          var me=this;
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide'); 
            gridJugador.style["grid-area"] = "c50";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=50;
            me.volverATirar();
          }, 3500);
          break;
        case 50: 
          var me=this;
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            gridJugador.style["grid-area"] = "c54";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=54;
            me.volverATirar();
            }, 3500);
          break;
        case 53: 
          /* DADOS */
          var me=this;
          this.numeroCasillaCaida=5;
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
            me.volverATirar();
            }, 3500);
          break;
        case 54: 
          var me=this;
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            gridJugador.style["grid-area"] = "c59";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=59;
            me.volverATirar();
            }, 3500);
          break;
        case 56: 
          /* CARCEL */
          var me=this;
          this.numeroCasillaCaida=3;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            me.jugadores[me.turnosJugadores[me.turno]].turnosPerdidos=2;
            }, 3500);
          break;
        case 58: 
          /* CALAVERA */
          var me=this;
          this.numeroCasillaCaida=7;
          setTimeout(function(){$('#modalCasillaCaida').modal('show'); }, 500);
          setTimeout(function(){
            $('#modalCasillaCaida').modal('hide');  
            gridJugador.style["grid-area"] = "c1";
            me.jugadores[me.turnosJugadores[me.turno]].posicion=1;
            }, 3500);
          break;
        default:
          var me=this;
          setTimeout(function(){$('#modalInfo').modal('show'); }, 500);
          setTimeout(function(){$('#modalInfo').modal('hide'); me.pregunta();    }, 5000);    
          break;
      }
      /* Finaliza el turno y pasa al siguiente jugador */
      var me=this;
      setTimeout(function(){me.cambiarTurno();  }, 4500); 
    
    },
    opcionNacimiento(){
      var repuesta= this.arrayPreguntas[this.randPregunta].tipoRespuesta;
      this.arrayOpciones=[this.arrayMujeres[this.numeroMujer][repuesta], this.arrayMujeres[Math.floor(Math.random() * 200)][repuesta], this.arrayMujeres[Math.floor(Math.random() * 200)][repuesta]]
      this.shuffle(this.arrayOpciones);
      if(this.arrayOpciones[0]==this.arrayOpciones[1] || this.arrayOpciones[0]==this.arrayOpciones[2] || this.arrayOpciones[1]==this.arrayOpciones[2] ||
      this.arrayOpciones[0]==null || this.arrayOpciones[1]==null || this.arrayOpciones[2]==null ||
      this.arrayOpciones[0]=="?" || this.arrayOpciones[1]=="?" || this.arrayOpciones[2]=="?"){
        this.opcionNacimiento();
      }
    },
    opcionGeografica(){
      var repuesta= this.arrayPreguntas[this.randPregunta].tipoRespuesta;
      this.arrayOpciones=[this.arrayMujeres[this.numeroMujer][repuesta], this.arrayMujeres[Math.floor(Math.random() * 200)][repuesta], this.arrayMujeres[Math.floor(Math.random() * 200)][repuesta]];
      this.shuffle(this.arrayOpciones);
      if(this.arrayOpciones[0]==this.arrayOpciones[1] || this.arrayOpciones[0]==this.arrayOpciones[2] || this.arrayOpciones[1]==this.arrayOpciones[2] ||
      this.arrayOpciones[0]==null || this.arrayOpciones[1]==null || this.arrayOpciones[2]==null ||
      this.arrayOpciones[0]=="?" || this.arrayOpciones[1]=="?" || this.arrayOpciones[2]=="?"){
        this.opcionGeografica();
      }
    },
    opcionCategoria(){
      var repuesta= this.arrayPreguntas[this.randPregunta].tipoRespuesta;
      var respuestaRandom1=this.arrayCategorias[Math.floor(Math.random() * 9)];
      var respuestaRandom2=this.arrayCategorias[Math.floor(Math.random() * 9)];
      this.arrayOpciones=[this.arrayCategorias[this.arrayMujeres[this.numeroMujer][repuesta]], respuestaRandom1, respuestaRandom2];
      this.shuffle(this.arrayOpciones);
      if(this.arrayOpciones[0]==this.arrayOpciones[1] || this.arrayOpciones[0]==this.arrayOpciones[2] || this.arrayOpciones[1]==this.arrayOpciones[2] ||
      this.arrayOpciones[0]==null || this.arrayOpciones[1]==null || this.arrayOpciones[2]==null ||
      this.arrayOpciones[0]=="?" || this.arrayOpciones[1]=="?" || this.arrayOpciones[2]=="?"){
        this.opcionCategoria();
      }
    },
    opcionApellido(){
      var repuesta= this.arrayPreguntas[this.randPregunta].tipoRespuesta;
      this.arrayOpciones=[this.arrayMujeres[this.numeroMujer][repuesta], this.arrayMujeres[Math.floor(Math.random() * 200)][repuesta], this.arrayMujeres[Math.floor(Math.random() * 200)][repuesta]];
      this.shuffle(this.arrayOpciones);
      if(this.arrayOpciones[0]==this.arrayOpciones[1] || this.arrayOpciones[0]==this.arrayOpciones[2] || this.arrayOpciones[1]==this.arrayOpciones[2] ||
      this.arrayOpciones[0]==null || this.arrayOpciones[1]==null || this.arrayOpciones[2]==null ||
      this.arrayOpciones[0]=="?" || this.arrayOpciones[1]=="?" || this.arrayOpciones[2]=="?"){
        this.opcionApellido();
      }
    },
    pregunta(){
      this.randPregunta=Math.floor(Math.random() * 4);
      var repuesta= this.arrayPreguntas[this.randPregunta].tipoRespuesta;
      console.log(this.arrayMujeres[this.numeroMujer][repuesta]); 
      console.log(this.getKeyByValue(this.arrayMujeres[this.numeroMujer],this.arrayMujeres[this.numeroMujer][repuesta]));
      var respuestaCorrecta=this.arrayMujeres[this.numeroMujer][repuesta];
      var respuestaCampo=this.getKeyByValue(this.arrayMujeres[this.numeroMujer],this.arrayMujeres[this.numeroMujer][repuesta]);
      
      if(this.arrayMujeres[this.numeroMujer][repuesta]!=null){
        if(respuestaCampo=="fechaNacimiento"){
          this.opcionNacimiento();  
        }
        else if (respuestaCampo=="zonaGeografica"){
          this.opcionGeografica();
        }
        else if (respuestaCampo=="id_categoria"){
          this.opcionCategoria();          
        } 
        else if (respuestaCampo=="apellido"){
          this.opcionApellido();          
        }
        $('#modalPregunta').modal('show');
      }
      else{
        this.pregunta();
      }
    },
    corregirPregunta(respuesta, btn){
      var repuestaBD= this.arrayPreguntas[this.randPregunta].tipoRespuesta;
      var respuestaCampo=this.getKeyByValue(this.arrayMujeres[this.numeroMujer],this.arrayMujeres[this.numeroMujer][repuestaBD]);
      console.log("Respuesta "+respuesta);
      console.log(btn);
      console.log("Respuesta correctar = "+this.arrayMujeres[this.numeroMujer][repuestaBD]);

      if(respuestaCampo!="id_categoria"){

        if(respuesta==this.arrayMujeres[this.numeroMujer][repuestaBD]){
          console.log("Respuesta correcta");
          //BOTON  VERDE
          var boton=document.querySelector("#btn"+btn);
          boton.style["background-color"]="green";
          if(this.turno==0){
            this.turnoP=this.numeroJugadores-1;
            this.jugadores[this.turnosJugadores[this.turnoP]].puntuacion+=10;            
          }
          else{
            this.turnoP=this.turno-1;
            this.jugadores[this.turnosJugadores[this.turnoP]].puntuacion+=10;
            
          }
          //cerrar modal
          this.cerrarModalPregunta();
        }
        else{
          //BOTON DE COLOR ROJO
          var boton=document.querySelector("#btn"+btn);
          boton.style["background-color"]="red";
          //cerrar modal
          this.cerrarModalPregunta();

        }
      }
      else if(respuestaCampo=="id_categoria"){

        console.log("parte 1 "+respuesta);
        console.log("parte 2 "+this.arrayCategorias[this.arrayMujeres[this.numeroMujer][repuestaBD]]);
        if(respuesta == this.arrayCategorias[this.arrayMujeres[this.numeroMujer][repuestaBD]]){
          console.log("Respuesta correcta");
          //BOTON DE COLOR VERDE
          var boton=document.querySelector("#btn"+btn);
          boton.style["background-color"]="green";
          if(this.turno==0){
            this.turnoP=this.numeroJugadores-1;
            this.jugadores[this.turnosJugadores[this.turnoP]].puntuacion+=10;
          }
          else{
            this.turnoP=this.turno-1;
            this.jugadores[this.turnosJugadores[this.turnoP]].puntuacion+=10;
          }
          //cerrar modal
          this.cerrarModalPregunta();
        }
        else{
          //BOTON DE COLOR ROJO
          var boton=document.querySelector("#btn"+btn);
          boton.style["background-color"]="red";
          //cerrar modal
          this.cerrarModalPregunta();
        }
      }
    },
    cerrarModalPregunta(){
      var boton1=document.querySelector("#btn1");
      var boton2=document.querySelector("#btn2");
      var boton3=document.querySelector("#btn3");
      boton1.disabled = true;
      boton2.disabled = true;
      boton3.disabled = true;
      setTimeout(function(){
        $('#modalPregunta').modal('hide'); 
      }, 3000);
      setTimeout(function(){
        boton1.style["background-color"]="#428bca";
        boton2.style["background-color"]="#428bca";
        boton3.style["background-color"]="#428bca";
        boton1.disabled = false;
        boton2.disabled = false;
        boton3.disabled = false;
      }, 4000);
    }
  },
  created(){
    console.log('Component created.');
    this.loading = true;
    this.cargarPreguntas();
    this.cargarMujeres();

  },
  mounted(){
    console.log('Component mounted.');
        
    /* Damos aleatoriamente el orden de los jugadores y se muestra en un modal */
    this.shuffle(this.turnosJugadores);
    setTimeout(function(){$('#modalTurnos').modal('show');  }, 1500);  
  }

}
</script>
<script src="js/jugadores.js"></script>