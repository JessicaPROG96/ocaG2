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
<<<<<<< HEAD
 
// Route::get('/', 'Auth\ocaController@index')->name('login');
Auth::routes();

Route::get('/', [ocaController::class, 'index']);

// Route::get('/', 'ocaController@index');
=======

 Route::get('/', [ocaController::class, 'index']);

>>>>>>> a9f334d45332d8b491266db4777663d2b4ff4575

Route::get('juego', [ocaController::class, 'tablero']);

Route::get('galeria', [ocaController::class, 'galeria']);

Route::get('clasificacion', [ocaController::class, 'clasificacion']);

Route::post('/', [ocaController::class, 'postLogin']);

Auth::routes(['verify'=>true]);

Route::get('/home', [ocaController::class, 'index'])->name('home')->middleware('verified');


 /* Route::get('/', function () {
     return view('welcome');
 }); */



<<<<<<< HEAD

=======
>>>>>>> a9f334d45332d8b491266db4777663d2b4ff4575

 
