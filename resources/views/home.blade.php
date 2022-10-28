@extends('padrao')
@section('content')

<section class="home">

<div class="text-center">
<h1>Profetas Import's</h1>
</div>
  
<img src="{{'/img/fundo1.jpg'}}" class="card-img-top" alt="...">

<div class="text-center">
<h1>Nossos Produtos</h1>
</div>
<h1>    </h1>

<div class="text-center">
<h1> </h1>
</div>
<div class="text-center">
<h1> </h1>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{'/img/c.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Camisas De Futebol</h5>
        <p class="card-text">Encontre aqui as melhores camisas do mercado!</p>
      </div>
      <a href="/listaCamisa" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Acesse Aqui !</a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{'/img/chuteira.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Chuteiras</h5>
        <p class="card-text">Encontre aqui as melhores chuteiras do mercado !</p>
      </div>
      <a href="/listaChuteira" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Acesse Aqui!</a>

    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{'/img/bone.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bonés</h5>
        <p class="card-text">Encontre aqui os melhores bonés do mercado !</p>
      </div>
      <a href="/listaBone" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Acesse Aqui !</a>
    </div>
  </div>
</div>

<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
</section>
@endsection