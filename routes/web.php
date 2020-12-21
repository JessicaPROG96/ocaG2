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
// Route::get('/', 'Auth\ocaController@index')->name('login');

Route::get('juego', [ocaController::class, 'tablero']);

Route::get('galeria', [ocaController::class, 'galeria']);

Route::get('clasificacion', [ocaController::class, 'clasificacion']);





Route::get('/', [ocaController::class, 'index']); 

Route::get('juego', [ocaController::class, 'tablero']);

Route::get('galeria', [ocaController::class, 'galeria']);

Route::get('clasificacion', [ocaController::class, 'clasificacion']);


// Route::get('/', function () {
//     return view('oca.inicio');
// });

// Route::get('galeria', function () {
//     return view('oca.galeria');
// });

// Route::get('clasificacion', function () {
//     return view('oca.clasificacion');
// });


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
