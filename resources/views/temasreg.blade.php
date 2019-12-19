@extends('layouts.master')

@section('contenido')
<div class="container">
  <div class="row">
    <div class="col">

  <h1 class="mt-5 mx-auto w-10 text-center">Selecciona los temas que mas te interesen...</h1>

<div class=" d-flex">
  <ul class="list-group list-group-horizontal mt-5 flex-wrap text-center justify-content-center" >
    @foreach ($temas as $key => $tema)
      <li class="
        captura
        list-group-item
        bg-orange
        w-25
        text-white
        mr-3
        border-radius-custom
        justify-content-center
        align-items-center
        mb-5" >
      {{$tema -> titulo}}
  </li>
  @endforeach
  </ul>
</div>

<div class="text-center bm-2">
  <button type="button" class="btn btn-primary mt-5 w-25 text-center" data-toggle="button" aria-pressed="false" autocomplete="off">
    CONFIRMAR
  </button>
</div>

</div>
</div>
</div>

<script src="js/master.js" charset="utf-8"></script>

@endsection
