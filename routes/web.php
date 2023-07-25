<?php
 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\EmpleadoActividadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['auth:sanctum','verified'])->get('/dash',function(){
    return view('dash.index');   
   })->name('dash');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('roles', 'App\Http\Controllers\RoleController');
Route::resource('usuarios', 'App\Http\Controllers\UsuarioController');
Route::resource('periodos', 'App\Http\Controllers\PeriodoController');
    Route::resource('carreras', 'App\Http\Controllers\CarreraController');
    Route::resource('periodos', 'App\Http\Controllers\PeriodoController');
    Route::resource('empleadocarreras', 'App\Http\Controllers\EmpleadocarreraController');
    Route::resource('empleados', 'App\Http\Controllers\EmpleadoController');

    

Route::get('/empleadoactividades', [EmpleadoActividadController::class, 'index'])->name('empleadoactividades.index');
Route::get('/empleadoactividades/create', [EmpleadoActividadController::class, 'create'])->name('empleadoactividades.create');
Route::post('/empleadoactividades', [EmpleadoActividadController::class, 'store'])->name('empleadoactividades.store');
Route::get('/empleadoactividades/{id}', [EmpleadoActividadController::class, 'show'])->name('empleadoactividades.show');
Route::get('/empleadoactividades/{id}/edit', [EmpleadoActividadController::class, 'edit'])->name('empleadoactividades.edit');
Route::put('/empleadoactividades/{id}', [EmpleadoActividadController::class, 'update'])->name('empleadoactividades.update');
Route::delete('/empleadoactividades/{id}', [EmpleadoActividadController::class, 'destroy'])->name('empleadoactividades.destroy');

