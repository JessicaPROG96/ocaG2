<template>
       <div id="tablero">

        <div class="casilla p-2" id="casillaInicio">
            <div class="row">
                <div class="col-sm-8 casillaHead">
                    <p class="numCasilla" v-text="'1'"></p>
                    <img src="../resources/img/avatars/default.png" alt="lo sentimos">
                </div>
                <!-- <div class="col-sm-4 casillaHead"><button class="pregunta" v-text="'?'"></button></div> -->
            </div>
            <div class="row">
                <div class="col-sm-12 casillaBody">
                    <h2>Hola mundo</h2>
                    <div class="area d-flex align-items-center justify-content-around" id="area1">Hola otra vez</div>
                </div>
            </div>
        </div>
<!-- otras casillas -->
        <div class="casilla casillaJuego px-2 py-2 text-center" :id="'casilla'+(n=n+1)" v-for="n in 61" :key="n">
            <div class="row">
                <div class="col-sm-8 casillaHead">
                    <p class="numCasilla" v-text="n"></p>
                </div>
                <!-- <div class="col-sm-4 casillaHead"><button class="pregunta" v-text="'?'"></button></div> -->
            </div>
            <div class="row">
                <div class="col-sm-12 casillaBody">
                    <div class="area" :id="'area'+n"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 casillaFooter">
                    <p class="m-0" :id="'nombreMujer'" v-if="n!==5 && n!==6 && n!==9 && n!==12 && n!==14 && n!==18 && n!==19 && n!==23 && n!==27 && n!==31 && n!==32 
                    && n!==41 && n!==42 && n!==45 && n!==50 && n!==52 && n!==54 && n!==58 && n!==59" v-text="''"></p>
                </div>
            </div>
        </div>

        <div class="casillaNormas p-2" id="casillaNormas">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col">
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-light" data-toggle="modal" data-target="#mostrarNormas">
                        <strong>Ver normas</strong>
                    </button> -->
                </div>
            </div>
        </div>

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
</template>