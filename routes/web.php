<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CamisasController;
use App\Http\Controllers\ChuteiraController;
use App\Http\Controllers\BoneController;


Route::get('/', function () {
    return view('welcome');
});

//CAMISAS
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
//
Route::put('/editarChuteira/{registroChuteira}',[ChuteiraController::class,'AlterarBancoChuteira'])->name('alterar-banco-chuteira');

Route::get('/editarChuteira',[ChuteiraController::class,'MostrarEditarChuteiras'])->name('editar-chuteira');

Route::delete('/editarChuteira/{registroChuteiras}',[ChuteiraController::class,'apagarChuteira'])->name('apagar-chuteira');

Route::get('/alterarChuteira/{registroChuteira}',[ChuteiraController::class,'MostrarAlterarChuteira'])->name('alterar-chuteira');

//Route::get('/editarCamisa',[CamisasController::class,'MostrarCamisas'])->name('editar-camisa');

Route::get('/cadastrarBone',[BoneController::class,'cadastroBone'])->name('cadastrar-bone');

Route::post('/cadastrarBone',[BoneController::class,'SalvarBancoBone'])->name('salvar-banco-bone');

Route::put('/editarBone/{registroBone}',[BoneController::class,'AlterarBancoBone'])->name('alterar-banco-bone');

Route::get('/editarBone',[BoneController::class,'MostrarBone'])->name('editar-bone');

Route::get('/alterarBone/{registroBone}',[BoneController::class,'MostrarAlterarBone'])->name('alterar-bone');

Route::delete('/editarBone/{registroBone}',[BoneController::class,'apagarBone'])->name('apagar-bone');

Route::get('/listaCamisa',[CamisasController::class,'listaCamisa'])->name('lista-camisa');

Route::get('/listaChuteira',[ChuteiraController::class,'listaChuteira'])->name('lista-chuteira');

Route::get('/listaBone',[BoneController::class,'listaBone'])->name('lista-bone');

Route::get('/editarBone',[BoneController::class,'MostrarEditarBone'])->name('editar-bone');





