@extends('layouts.master')

@section('contenido')
<div class="container">
  <div class="card noti-h">
    <h1 class="card-header bg-orange text-white text-center rounded">
      NOTIFICACIONES
    </h1>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Bienvenidos a la sección de las Notificaciones! Vas a recibir alertas como las que están a continuación! Para modificar la opción de recibir las notificaciones dirigete a Configuración.</li>
      <li class="list-group-item">Tenés un nuevo seguidor!</li>
      <li class="list-group-item">Tenés un nuevo mensaje!</li>
      <li class="list-group-item">Daniel Funentes lanzó una nueva publicación!</li>
    </ul>
  </div>
</div>
@endsection
