<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PDFController;
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

//ver datos
Route::get('/vistapacientes',[PacienteController::class,'index']);

Route::get('/dashboard',[PacienteController::class,'principal'], function () {
    return view('principal');
})->middleware(['auth'])->name('dashboard');

Route::get('/index', [PacienteController::class,'index2']);

//registrar
//envia los datos
Route::post('/registrar1', [PacienteController::class,'store']);
//baja los datos enviados
Route::get('/registrarpa',[PacienteController::class,'create']);

//ver dato del paciente
Route::get('/ver=paciente=/{id?}',[PacienteController::class, 'verpacientes'])->name('verpaciente');
//ver dato del paciente de alta
Route::get('/ver=paciente=de=alta/{id?}',[PacienteController::class, 'verpacientedealta'])->name('verpacientesdealta');

//eliminar paciente
Route::get('/eliminar/{id}',[PacienteController::class, 'destroy'])->name('eliminarpa');

//eliminar paciente de alta
Route::get('/eliminar=alta/{id}',[PacienteController::class, 'destroyalta'])->name('eliminardealta');

//editar los datos del paciente
Route::get('/editar=datos/{id}',[PacienteController::class, 'edit'])->name('editarpaciente');
//actualizar datos del paciente
Route::post('/actualizardatos/{id}',[PacienteController::class, 'update'])->name('update');

//ver datos de los pacientes dados de alta
Route::get('/pacientes=de=Alta',[PacienteController::class,'altas'], function () {
    return view('pacientesdalta');
})->middleware(['auth'])->name('dealta');

//editar los datos del paciente
Route::get('/dealta/{id}',[PacienteController::class, 'dealtapaciente'])->name('dealta');

//actualizar datos del paciente
Route::post('/pacientedealta/{id}',[PacienteController::class, 'alta'])->name('alta');


//imprimir pacientes activos
//ver pdf
Route::get('/verpacientepdf', [PacienteController::class, 'pdf']);
//descargar pdf
Route::get('/descargar', [PacienteController::class, 'descargarpdf']);

//imprimir pacientes de alta/descargardealta
//ver pdf
Route::get('/verpdfdealta', [PacienteController::class, 'verdealtapdf']);
//descargar pdf
Route::get('/descargardealta', [PacienteController::class, 'descargardealtapdf']);

require __DIR__.'/auth.php';
