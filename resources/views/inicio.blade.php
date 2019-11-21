@extends('layouts.app')

@section('content')

  <h1 class="text-center text-primary ">Social Jungle, donde podes encontrar información de...</h1>

  <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/rafa.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>DEPORTES</h5>
          <h3>Enterate al instante cada resultado o noticia.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/politica.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>POLITICA</h5>
          <h3>Te mantemos al tanto de lo que esta pasanod en todo el mundo.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/tech.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>TECNOLOGIA</h5>
          <h3>Avanza muy rapido y te informamos de ambsolutamente todo.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

@endsection
