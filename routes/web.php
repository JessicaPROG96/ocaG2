<?php
use App\Http\Controllers\ocaController;
use App\Http\Controllers\TableroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('ajax', [ocaController::class , 'ajax']);
Route::get('ajaxb', [ocaController::class , 'ajaxBorrar']);


// Route::get('ajax',['as' => 'ajax', 'uses' => 'ocaController@ajax']);

//Rutas normales

Route::get('/', [ocaController::class, 'index']);

Route::get('juego', [ocaController::class, 'tablero']);

Route::get('galeria', [ocaController::class, 'galeria']);

Route::get('clasificacion', [ocaController::class, 'clasificacion']);

Route::get('clasi', [ocaController::class, 'clasi']);

Route::post('/', [ocaController::class, 'postLogin']);

Auth::routes(['verify'=>true]);

Route::get('/home', [ocaController::class, 'index'])->name('home')->middleware('verified');

//ruta para cargar las categorias 
Route::get('categorias', [TableroController::class, 'categorias']);
//formualrio para dar de alta a una mujer
Route::get('alta', [ocaController::class, 'altaMujer']);
//guardar los datos en la BDD
Route::post('crearMujer', [ocaController::class, 'crearMujer']);
//Rutas para gestionar datos

//ruta para cargar los datos de clasificacion
Route::get('clasi', [ocaController::class, 'clasi']);

//ruta para cargar el dato de las mujeres 
Route::get('mujeres', [TableroController::class, 'indexMujer']);
//ruta para cargar las preguntas en el tablero
Route::get('preguntas', [TableroController::class, 'indexPregunta']);
