@extends('padrao')
@section('content')

<section class="cadastrarBone">

<div class="text-center">
  <h1>Tela de Cadastro</h1>
</div>

<div class="container cadastroBones">
<form class="row g-3" method="post" action="{{route('salvar-banco-bone')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="inputModelo" placeholder="Boné">

    @error('modelo')
    <div class="fw-bolder">*Preencher o campo modelo. </div>
    @enderror('modelo') 
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Tamanho</label>
    <input type="text" name="tamanho" value="{{old('tamanho')}}" class="form-control" id="inputMarca" placeholder="Tamanho">
    @error('tamanho')
    <div class="fw-bolder">*Preencher o campo tamanho. </div>
    @enderror('tamanho')  
  </div>
  <div class="col-12">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca" value="{{old('marca')}}" class="form-control" id="inputMarca" placeholder="Nike">
    @error('marca')
    <div class="fw-bolder">*Preencher o campo marca. </div>
    @enderror('marca')  
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Cor</label>
    <input type="text" name="cor" value="{{old('cor')}}" class="form-control" id="inputAno" placeholder="Preta">
    @error('cor')
    <div class="fw-bolder">*Preencher o campo cor. </div>
    @enderror('cor')  
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor')}}" class="form-control" id="inputAno" placeholder="R$ 100,00">
    @error('valor')
    <div class="fw-bolder">*Preencher o campo valor. </div>
    @enderror('valor')  
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>

</section>

@endsection