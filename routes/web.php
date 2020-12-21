<?php
use App\Http\Controllers\ocaController;
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

Route::get('/', [ocaController::class, 'index']);


Route::get('juego', [ocaController::class, 'tablero']);

Route::get('galeria', [ocaController::class, 'galeria']);

Route::get('clasificacion', [ocaController::class, 'clasificacion']);

Route::post('/', [ocaController::class, 'postLogin']);

Auth::routes(['verify'=>true]);

Route::get('/home', [ocaController::class, 'index'])->name('home')->middleware('verified');


/* Route::get('/', function () {
return view('welcome');
 }); */

// RUTA PARA EL BUSCADOR EN TIEMPO REAL
// Route::get('')