<?php

use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompaniaController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\cargoController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\ElementoinventarioController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ResponsablespordependenciaController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\MovimientoinvController;
use App\Http\Controllers\ReferenciaController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


      //y creamos un grupo de rutas protegidas para los controladores}
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('companias', CompaniaController::class);
    Route::resource('dependencias', DependenciaController::class);
    Route::resource('proveedores', ProveedorController::class);
    Route::resource('responsables', ResponsableController::class);
    Route::resource('cargos', cargoController::class);
    Route::resource('responsablespordependencias', ResponsablespordependenciaController::class);
    Route::resource('unidades', UnidadController::class);
    Route::resource('elementos', ElementoController::class);
    Route::resource('marcas', MarcaController::class);
    Route::resource('referencias', ReferenciaController::class);
    Route::resource('movimientos', MovimientoController::class);
    Route::resource('estados', EstadoController::class);
    Route::resource('movimientoinvs', MovimientoinvController::class);
    Route::resource('elementosinv', ElementoinventarioController::class);


});
