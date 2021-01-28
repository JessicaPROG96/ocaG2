<template>

  <div>
    

<hr><hr><hr>

     <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Foto</th>
        </tr>
      </thead>
      <!-- Recorremos el array y cargamos nuestra tabla co datos -->
      <tr v-for="mujer in mujeresCategoria" :key="mujer.id"> 
            <td v-text="mujer.id"></td>
            <td v-text="mujer.nombre"></td>
            <td v-text="mujer.apellido"></td>
             <td><img :src="'../resources/img/fotosMujeres/'+mujer.imagen" :alt="'mujer'" style="with:100px; height:100px"/></td>
           
        </tr>
    </table>
<hr><hr><hr>

<table >
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Foto</th>
        </tr>
      </thead>
      <!-- Recorremos el array y cargamos nuestra tabla -->
      <tr v-for="mujer in mujeresC" :key="mujer.id"> 
            <td v-text="mujer.id"></td>
            <td v-text="mujer.nombre"></td>
            <td v-text="mujer.apellido"></td>
             <td><img :src="'../resources/img/fotosMujeres/'+mujer.imagen" :alt="'mujer'" style="with:100px; height:100px"/></td>
           
        </tr>
    </table>

<table class="table text-center">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Foto</th>
        </tr>
      </thead>
      <!-- Recorremos el array y cargamos nuestra tabla -->
      <tr v-for="mujer in arrayMujeres" :key="mujer.id"> 
            <td v-text="mujer.id"></td>
            <td v-text="mujer.nombre"></td>
            <td v-text="mujer.apellido"></td>
             <td><img :src="'../resources/img/fotosMujeres/'+mujer.imagen" :alt="'mujer'" style="with:100px; height:100px"/></td>
           
        </tr>
    </table>

    

    

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
          //me.shuffle(me.arrayMujeres);
          me.modoJuego = localStorage.getItem("modoJuego");
          console.log(me.modoJuego);
          me.mujeresC = me.arrayMujeres.filter((mujer) => mujer.id_categoria == me.modoJuego);
          // console.log(me.mujeresC);

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
    // darInfo(n) {
    //   console.log("Numero casilla " + n);
    //   console.log(
    //     this.arrayMujeres[n - 2].nombre +
    //       " " +
    //       this.arrayMujeres[n - 2].apellido +
    //       " " +
    //       this.arrayMujeres[n - 2].imagen
    //   );
    // },

      
  },
  computed: {
      mujeresCategoria() {
        return this.arrayMujeres.filter((mujer) => mujer.id_categoria == this.modoJuego);
        
      }
  },
  mounted() {
    this.cargarMujeres();
    this.categoriaSelect();
    // console.log('Component mounted.')
  },
};
</script>