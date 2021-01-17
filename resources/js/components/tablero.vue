<template>
  <div>
    <!-- tablero -->
    <div id="tablero">
      <!-- casilla inicio -->
      <div
        class="casilla p-2" id="casillaInicio" 
        :style="{backgroundImage: 'url(../resources/img/otros/desayuno2.jpg)', }" >
        <div class="row">
          <div class="col-sm-8 casillaHead">
            <p class="numCasilla" v-text="'1'"></p>
          </div>
        </div>
      </div>
      <!-- Casillas Nº 2-62 -->
      <div
        class="casillaNum" :id="'casilla' + (n = n + 1)"
        v-for="n in 61"
        :key="n"
      >
          <!-- Modal con info de las mujeres -->
          <div
            class="modal fade modalInfoC" :id="'modalInfo' + n" tabindex="-1" role="dialog" aria-labelledby="modalInfo"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" :id="n" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">
                    {{ mujeresC[n - 2].nombre + " " + mujeresC[n - 2].apellido  }}
                  </h5> 
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-6" v-if="mujeresC[n - 2].imagen !== null">
                      <img :src=" '../resources/img/fotosMujeres/' + mujeresC[n - 2].imagen" :alt="'mujer'"/>
                    </div>
                    <div class="col-6" v-else>
                      <img
                        :src="'../resources/img/otros/feminismo.jpg'"
                        :alt="'mujer'"/>
                    </div>
                    <div class="col-3">
                      <label for="nacimiento">Nacimiento:</label>
                      <p>{{ mujeresC[n - 2].fechaNacimiento }}</p>
                    </div>
                    <div class="col-3">
                      <label for="nacimiento">Campo:</label>
                      <p>{{ arrayCategorias[mujeresC[n - 2].id_categoria - 1]}}</p>
                    </div>
                  </div>

                  <label for="descripcion">Descripción:</label>
                  <p>{{ mujeresC[n - 2].descripcion }}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Casilla mujeres con foto -->
          <div
            class="casillaif"
            v-if="
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
              mujeresC[n - 2].imagen !== null ">
                <div class="casilla casillaJuego px-2 py-2 text-center"  :style="{  backgroundImage: 'url(../resources/img/fotosMujeres/' + mujeresC[n - 2].imagen + ')', }" >
                  <!-- encabezado de la casilla -->
                  <div class="casillaHead">
                    <p  class="numCasilla"
                      v-text="n"
                      v-on:click="darInfo(n)"
                      data-toggle="modal"
                      :data-target="'#modalInfo' + n"
                    ></p>
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
          <div
            class="casillaif"
            v-else-if="
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
              mujeresC[n - 2].imagen === null
            " >
            <div
              class="casilla casillaJuego px-2 py-2 text-center"
              :style="{
                backgroundImage: 'url(../resources/img/otros/feminismo.jpg)',}" >
              <div class="casillaHead">
                <p
                  class="numCasilla"
                  v-text="n"
                  v-on:click="darInfo(n)"
                  data-toggle="modal"
                  :data-target="'#modalInfo' + n"
                ></p>
              </div>
              <!-- <div class="casillaFooter" >
                  <p
                    class="m-0"
                    :id="'nombreMujer'"
                    v-text="personasHM[n-2].nombre+' '+personasHM[n-2].apellido "
                  ></p>
                </div> -->
            </div>
          </div>
          <!-- Casillas OCA -->
          <div
            class="casillaif"
            v-else-if="
              n == 5 ||
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
            "
          >
            <div
              class="casilla casillaJuego px-2 py-2 text-center"
              :style="{
                backgroundImage: 'url(../resources/img/otros/goose.png)', }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
            </div>

          </div> <!-- ? -->
          <!-- Casillas PUENTE -->
          <div class="casillaif" v-else-if="n == 6 || n == 12">
            <div
              class="casilla casillaJuego px-2 py-2 text-center"
              :style="{
                backgroundImage: 'url(../resources/img/otros/puente.png)', }" >
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
            </div>
          </div>
          <!-- Casilla POSADA -->
          <div class="casillaif" v-else-if="n == 19">
            <div
              class="casilla casillaJuego px-2 py-2 text-center"
              :style="{ backgroundImage: 'url(../resources/img/otros/posada2.png)', }" >
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
            </div>
          </div>
          <!-- Casilla POZO -->
          <div class="casillaif" v-else-if="n == 31">
            <div
              class="casilla casillaJuego px-2 py-2 text-center"
              :style="{ backgroundImage: 'url(../resources/img/otros/pozo.jpg)' }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
            </div>
          </div>
          <!-- Casilla LABERINTO -->
          <div class="casillaif" v-else-if="n == 42">
            <div
              class="casilla casillaJuego px-2 py-2 text-center"
              :style="{
                backgroundImage: 'url(../resources/img/otros/laberinto.jpg)', }" >
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
            </div>
          </div>
          <!-- Casilla CÁRCEL -->
          <div class="casillaif" v-else-if="n == 56">
            <div
              class="casilla casillaJuego px-2 py-2 text-center"
              :style="{
                backgroundImage: 'url(../resources/img/otros/carcel.jpg)', }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
            </div>
          </div>
          <!-- Casillas DADO -->
          <div class="casillaif" v-else-if="n == 26 || n == 53">
            <div
              class="casilla casillaJuego px-2 py-2 text-center"
              :style="{
                backgroundImage: 'url(../resources/img/otros/dadosFondo.png)', }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
            </div>
          </div>
          <!-- Casilla CALAVERA -->
          <div class="casillaif" v-else-if="n == 58">
            <div
              class="casilla casillaJuego px-2 py-2 text-center"
              :style="{
                backgroundImage: 'url(../resources/img/otros/muerte.svg)', }">
              <div class="casillaHead">
                <p class="numCasilla" v-text="n"></p>
              </div>
            </div>
          </div>

      </div> <!-- Final de Casillas Nº 2 -->


      <!-- casilla final -->
      <div
        class="casilla p-2"
        id="casilla63"
        :style="{ backgroundImage: 'url(../resources/img/otros/desayuno.jpg)' }">
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

    </div>

  </div>


</template>

<script>

export default {
  data() {
    return {
      id: "",
      nombre: "",
      imagen: '',
      apellido: "",
      arrayMujeres: [],
      nombreCategoria: "",
      color: "",
      arrayAmbitos: [],
      mujeresC:[],
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
    };
  },
  methods: {
    shuffle(a) {
      //console.log("Me ejecuto");
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
          // console.log(response)
          me.arrayMujeres = response.data;
          me.shuffle(me.arrayMujeres);
          me.modoJuego = localStorage.getItem("modoJuego");
          //condiciones
          me.mujeresC = me.arrayMujeres.filter((mujer) => mujer.id_categoria == me.modoJuego);
          console.log(me.mujeresC);
          for (let index = 0; index < mujeresC.length; index++) {
            mujeresC.length =+ 0;
            
          }
          if (me.modoJuego == 0){
            // cargar arrayMujeres
            console.log('entra');
            me.mujeresC = me.arrayMujeres; 
            localStorage.removeItem('modoJuego');
          }


        })
        .catch(function (error) {
          console.log(error);
        });
    },
    categoriaSelect() {
      let ca = this;
      let urls = "categorias";
      axios
        .get(urls)
        .then(function (response) {
          ca.arrayAmbitos = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    darInfo(n) {
      console.log("Numero casilla " + n);
      console.log(
        this.mujeresC[n - 2].nombre +
          " " +
          this.mujeresC[n - 2].apellido +
          " " +
          this.mujeresC[n - 2].imagen
      );
    },

      
  },
  // computed: {
  //     mujeresCategoria() {
  //       return this.arrayMujeres.filter((mujer) => mujer.id_categoria == this.modoJuego);
        
  //     }
  // },
  mounted() {
    this.cargarMujeres();
    this.categoriaSelect();
    // console.log('Component mounted.')
  },
};
</script>