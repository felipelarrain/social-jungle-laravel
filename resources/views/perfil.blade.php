@extends('layouts.master')

@section('contenido')
<div class="container">
    <div class="col">
        <div class="bg-dark w-25 mt-4 rounded" style="height: 450px">
            <div class="text-white text-center">
                <h3 class="mt-2">Mi Perfil</h3>
            </div>
                <div class="nombre text-white ml-3">
                    <p class="font-weight-bold">Nombre: &nbsp;&nbsp; {{Auth::user()->name}}</p>
                </div>
                <div class="nombre text-white ml-3">
                    <p class="font-weight-bold">Apellido: &nbsp;&nbsp; {{Auth::user()->apellido}}</p>
                </div>
                <div class="nombre text-white ml-3">
                    <p class="font-weight-bold">Username: &nbsp;&nbsp; {{Auth::user()->username}}</p>
                </div>
                <div class="nombre text-white ml-3">
                    <p class="font-weight-bold">E-mail: &nbsp;&nbsp; {{Auth::user()->email}}</p>
                </div>
        </div>
    </div>

</div>
@endsection
