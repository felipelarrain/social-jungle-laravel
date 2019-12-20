@extends('layouts.master')

@section('contenido')

    <div class="_contenedorPublicacion">
        <div class="escritor">
            <img src="img/profile.png" alt="" class="fotoPerfil">
            <h5>{{$posts->user->name}} {{$posts->user->apellido}}</h5>

        </div>
        <div class="_contPublic">

            <h1>{{$posts->titulo}}</h1>
            <div class="contImagen"><img src="{{$posts->imagen}}" alt="" class="imagenPubl"></div>
            <p class="mensaje">
                {{$posts->mensaje}}
            </p>


        </div>



    </div>



@endsection
@push('styles')
<link rel="stylesheet" href="/css/publicacion.css">
@endpush