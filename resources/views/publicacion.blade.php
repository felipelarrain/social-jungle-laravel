@extends('layouts.master')

@section('contenido')

    <div class="_contenedorPublicacion">
        <div class="escritor">
            <img src="img/profile.png" alt="" class="fotoPerfil">
            <h5>{{$posts->user->name}} {{}}</h5>

        </div>




    </div>



@endsection
@push('styles')
<link rel="stylesheet" href="/css/publicacion.css">
@endpush