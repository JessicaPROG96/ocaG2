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
 
// Route::get('/', 'Auth\ocaController@index')->name('login');
Auth::routes();

Route::get('/', [ocaController::class, 'index']);

// Route::get('/', 'ocaController@index');

Route::get('juego', [ocaController::class, 'tablero']);

Route::get('galeria', [ocaController::class, 'galeria']);

Route::get('clasificacion', [ocaController::class, 'clasificacion']);



// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
