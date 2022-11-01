@extends('padrao')
@section('content')
<section class="altura7">
<div class="text-center">
  <h1>Tela de Edição</h1>
</div>
<div class="container cadastroCamisa">
<form class="row g-3" method="post" action="{{route('alterar-banco-camisa',$registroCamisa->id)}}">
  @csrf
  @method('put')
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo',$registroCamisa->modelo)}}" class="form-control" id="inputModelo" placeholder="Camisa">

    @error('modelo')
    <div class="fw-bolder">*Preencher o campo modelo. </div>
    @enderror('modelo') 
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Tamanho</label>
    <input type="text" name="tamanho" value="{{old('tamanho',$registroCamisa->tamanho)}}" class="form-control" id="inputMarca" placeholder="GG">
    @error('tamanho')
    <div class="fw-bolder">*Preencher o campo Tamanho. </div>
    @enderror('tamanho')  
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Marca</label>
    <input type="text" name="marca" value="{{old('marca',$registroCamisa->marca)}}" class="form-control" id="inputAno" placeholder="Nike">
    @error('marca')
    <div class="fw-bolder">*Preencher o campo Marca. </div>
    @enderror('marca')  
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor" value="{{old('cor',$registroCamisa->cor)}}" class="form-control" id="inputCor" placeholder="02569-9874">
    @error('cor')
    <div class="fw-bolder">*Preencher o campo cor. </div>
    @enderror('cor')    
  </div>
 
  <div class="col-md-12">
    <label for="inputZip" name="valor" class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor',$registroCamisa->valor)}}" class="form-control" id="inputZip" placeholder="25.660,23">
    @error('valor')
    <div class="fw-bolder">*Preencher o campo valor. </div>
    @enderror('valor') 
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
</div>
</section>
@endsection