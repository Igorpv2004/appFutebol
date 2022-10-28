<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CamisasController;
use App\Http\Controllers\ChuteiraController;


Route::get('/', function () {
    return view('welcome');
});

//Home da página
Route::get('/home',[HomeController::class,'mostrar'])->name('home');

//formulario cadastro Camisa

Route::get('/cadastrarCamisa',[CamisasController::class,'cadastroCamisa'])->name('cadastrar-camisa');

//salvar no banco de dados Camisa

Route::post('/cadastrarCamisa',[CamisasController::class,'SalvarBancoCamisa'])->name('salvar-banco-camisa');

//formulario cadastro Chuteira 

Route::get('/cadastrarChuteira',[ChuteiraController::class,'cadastroChuteira'])->name('cadastrar-chuteira');

//salvar no banco de dados Chuteira

Route::post('/cadastrarChuteira',[ChuteiraController::class,'SalvarBancoChuteira'])->name('salvar-banco-chuteira');


Route::put('/editarCamisa/{registroCamisa}',[CamisasController::class,'AlterarBancoCamisa'])->name('alterar-banco-camisa');

Route::get('/editarCamisa',[CamisasController::class,'MostrarEditarCamisa'])->name('editar-camisa');

Route::get('/alterarCamisas/{registroCamisa}',[CamisasController::class,'MostrarAlterarCamisas'])->name('alterar-camisa');

Route::delete('/editarCamisa/{registroCamisa}',[CamisasController::class,'apagarCamisas'])->name('apagar-camisa');


