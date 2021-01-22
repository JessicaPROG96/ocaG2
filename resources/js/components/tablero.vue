<template>
  <div>
    <!-- tablero -->
    <div id="tablero">
      <!-- casilla inicio -->
      <div
        class="casilla p-2"
        id="casillaInicio"
        :style="{
          backgroundImage: 'url(../resources/img/otros/desayuno2.jpg)',
        }"
      >
        <div class="row">
          <div class="col-sm-8 casillaHead">
            <p class="numCasilla" v-text="'1'"></p>
          </div>
        </div>
      </div>
      <!-- Casillas Nº 2-62 -->
      <div
        class="casillaNum"
        :id="'casilla' + (n = n + 1)"
        v-for="n in 61"
        :key="n"
      >

      <!-- Modal con info de las mujeres -->
          <div class="modal fade modalInfoC" :id="'modalInfo'+n" tabindex="-1" role="dialog" aria-labelledby="modalInfo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" :id="n"  role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">{{mujeresC[n-2].nombre+ ' '+mujeresC[n-2].apellido}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-6" v-if="mujeresC[n-2].imagen !==null">
                      <img :src="'img/fotosMujeres/'+mujeresC[n-2].imagen" :alt="'mujer'"/>
                    </div>
                    <div class="col-6" v-else>
                      <img :src="'img/otros/feminismo.jpg'" :alt="'mujer'"/>
                    </div>
                    <div class="col-3">
                      <label for="nacimiento">Nacimiento:</label> <p>{{mujeresC[n-2].fechaNacimiento}}</p>
                    </div>
                    <div class="col-3">
                      <label for="nacimiento">Campo:</label>
                      <p>{{arrayCategorias[mujeresC[n-2].id_categoria-1]}}</p>
                    </div>
                  </div>

                    <label for="descripcion">Descripción:</label><p>{{mujeresC[n-2].descripcion}}</p>
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
                  mujeresC[n-2].imagen !==null">
                
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/fotosMujeres/'+mujeresC[n-2].imagen+ ')' }">
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
        <div class="casillaif" v-else-if=" 
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
                  mujeresC[n-2].imagen===null">
          <div class="casilla casillaJuego px-2 py-2 text-center" :style="{ backgroundImage: 'url(img/otros/feminismo.jpg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n" v-on:click="darInfo(n)" data-toggle="modal" :data-target="'#modalInfo'+n"></p>
              </div>
              <div class="casillaFooter" >
                <p
                  class="m-0"
                  :id="'nombreMujer'"
                  v-text="mujeresC[n-2].nombre+' '+mujeresC[n-2].apellido "
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
        <div class="casillaif" v-else-if="n == 19">
          <div
            class="casilla casillaJuego px-2 py-2 text-center"
            :style="{
              backgroundImage: 'url(../resources/img/otros/posada2.png)',
            }"
          >
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
          <!-- casilla final -->
      <div
        class="casilla p-2"
        id="casilla63"
        :style="{ backgroundImage: 'url(../resources/img/otros/desayuno.jpg)' }"
      >
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
      </div> <!-- Final de Casillas Nº 2 -->

    </div>
     <button class="tirar" v-text="'Tirar'"  v-on:click="tirarDado"></button>
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
    <div class="modal fade modalCasillaCaida" id="modalCasillaCaida" tabindex="-1" role="dialog" aria-labelledby="modalCasillaCaida" aria-hidden="true">
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



  </div>
</template>

<script>
export default {
  data() {
    return {
      id: "",
      nombre: "",
      imagen: "",
      apellido: "",
      arrayMujeres: [],
      mujeresDuplicado:[],
      mujeresTriplicado:[],
      nombreCategoria: "",
      color: "",
      arrayAmbitos: [],
      mujeresC: [],
      modoJuego: "",
      arrayCategorias: [
        "Historia",
        "Derecho",
        "Antropología",
        "Geografía",
        "Filosofía",
        "Psicología",
        "Economía",
        "Sociología",
        "Pedagogía",
      ],
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
          nombre:"nombre1",
          turnosPerdidos:0,
          pozo:false
        },
        jugador2:{
          posicion:1,
          puntuacion:0,
          nombre:"nombre2",
          turnosPerdidos:0,
          pozo:true
        },
        jugador3:{
          posicion:1,
          puntuacion:0,
          nombre:"nombre3",
          turnosPerdidos:0,
          pozo:false
        },
        jugador4:{
          posicion:1,
          puntuacion:0,
          nombre:"nombre4",
          turnosPerdidos:0,
          pozo:false
        },
      },
    }
  },
  methods: {
    //cargar casillas aletarorias
    shuffle(a) {
      var j, x, i;
      for (i = a.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        x = a[i];
        a[i] = a[j];
        a[j] = x;
      }
      return a;
    },

    cargarMujeres() {
      let me = this;
      let url = "mujeres";
      axios
        .get(url)
        .then(function (response) {
          me.arrayMujeres = response.data;
          me.shuffle(me.arrayMujeres);
          me.modoJuego = localStorage.getItem("modoJuego");
          //datos filtrados por categorías
          me.mujeresC = me.arrayMujeres.filter((mujer) => mujer.id_categoria == me.modoJuego);
          
          me.mujeresDuplicado = me.arrayMujeres.filter((mujer) => mujer.id_categoria == me.modoJuego);
          me.mujeresTriplicado = me.arrayMujeres.filter((mujer) => mujer.id_categoria == me.modoJuego);

          if (me.mujeresC.length>=31) {
          me.mujeresC = me.mujeresC.concat(me.mujeresDuplicado);
          }
          else if (me.mujeresC.length>=25) {
            me.mujeresC = me.mujeresC.concat(me.mujeresDuplicado);
            me.mujeresC = me.mujeresC.concat(me.mujeresTriplicado);
            
          } else {
            me.mujeresC = me.arrayMujeres;
          }

          if (me.modoJuego == 0) {
            me.mujeresC = me.arrayMujeres;  // vuelve a cargar arrayMujeres
            // localStorage.removeItem('modoJuego');
          }
          
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
      var imgsrc = "img/otros/dados/dado"+dado+".svg";
      var texto= "¡Has sacado un "+dado+"!"
      $('#img_dado').attr('src',imgsrc);
      this.moverFicha(dado);
      $('#modalDado').modal('show');
      
      setTimeout(function(){$('#modalDado').modal('hide');  }, 3000);
      
    },
    cambiarTurno(){
      console.log("el turnooo es "+this.turno);
      if(this.turno>=this.numeroJugadores-1){
        this.turno=0;
        console.log("AHORA EL turnooo es "+this.turno);
        this.comprobarTurnoPerdido();
        
      }else{
        this.turno=this.turno+1;
        console.log("AHORA EL turnooo es "+this.turno);
        this.comprobarTurnoPerdido();
        
      }
    },
    volverATirar(){
      this.turno=this.turno-1;
      if(this.turno==-1){
        this.turno=this.numeroJugadores;
      }

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
      console.log("El "+this.jugadores[this.turnosJugadores[this.turno]]+" esta en la posicion "+this.jugadores[this.turnosJugadores[this.turno]].posicion);
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
          gridJugador.style["grid-area"] = "c9";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=9;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 9: 
          gridJugador.style["grid-area"] = "c14";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=14;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 12: 
          /* PUENTE */
          gridJugador.style["grid-area"] = "c6";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=6;
          this.numeroCasillaCaida=1;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 14: 
          gridJugador.style["grid-area"] = "c18";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=18;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 18: 
          gridJugador.style["grid-area"] = "c23";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=23;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 19: 
          /* POSADA */
          this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos=1;
          this.numeroCasillaCaida=2;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 23: 
          gridJugador.style["grid-area"] = "c32";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=32;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 26: 
          /* DADOS */
          this.volverATirar();
          this.numeroCasillaCaida=5;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 31: 
          /* POZO */
          this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos=4;
          this.jugadores[this.turnosJugadores[this.turno]].pozo=true;
          if(this.jugadores[this.turnosJugadores[0]].posicion<31){
            this.posJugador1=this.jugadores[this.turnosJugadores[0]].posicion;
          }
          if(this.jugadores[this.turnosJugadores[1]].posicion<31){
            this.posJugador2=this.jugadores[this.turnosJugadores[1]].posicion;
          }
          if(this.jugadores[this.turnosJugadores[2]].posicion<31){
            this.posJugador3=this.jugadores[this.turnosJugadores[2]].posicion;
          }
          if(this.jugadores[this.turnosJugadores[3]].posicion<31){
            this.posJugador4=this.jugadores[this.turnosJugadores[3]].posicion;
          }
          this.numeroCasillaCaida=4;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 32: 
          gridJugador.style["grid-area"] = "c41";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=41;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 41: 
          gridJugador.style["grid-area"] = "c45";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=45;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 42: 
          /* LABERINTO */
          gridJugador.style["grid-area"] = "c30";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=30;
          this.numeroCasillaCaida=6;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 45: 
          gridJugador.style["grid-area"] = "c50";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=50;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 50: 
          gridJugador.style["grid-area"] = "c54";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=54;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 53: 
          /* DADOS */
          this.volverATirar();
          this.numeroCasillaCaida=5;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 54: 
          gridJugador.style["grid-area"] = "c59";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=59;
          this.volverATirar();
          this.numeroCasillaCaida=0;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 56: 
          /* CARCEL */
          this.jugadores[this.turnosJugadores[this.turno]].turnosPerdidos=2;
          this.numeroCasillaCaida=3;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
        case 58: 
          /* CALAVERA */
          gridJugador.style["grid-area"] = "c1";
          this.jugadores[this.turnosJugadores[this.turno]].posicion=1;
          this.numeroCasillaCaida=7;
          setTimeout(function(){$('#modalDado').modal('hide'); $('#modalCasillaCaida').modal('show');  }, 2000);
          break;
      }
      /* Finaliza el turno y pasa al siguiente jugador */
      this.cambiarTurno();
    },
  },
  mounted() {
    this.cargarMujeres();
  },
};
</script>