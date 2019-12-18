@extends('layouts.app')
<title> Configuracion </title>
@section('content')



<form class="container-fluid" method="POST" action="{{ route ('home') }}">
    @csrf
    <h1 class="text-center font-weight-bold">Configuracion</h1>
    <div class="col-12 mt-5 rounded">
        <div class="row bg-white pb-5">
            <div class="mt-3 col-5">
                <label for="">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="mt-3 col-5">
                <label for="">Apellido</label>
                <input type="text" class="form-control" placeholder="Apellido">
            </div>
            <div class="mt-3 col-5">
                <label for="" class=""> Nueva contraseña</label>
                <input type="text" class="form-control" placeholder="Nueva contraseña">
            </div>
            <div class="mt-3 col-5">
                <label for="">Confirmar nueva contraseña</label>
                <input type="text" class="form-control" placeholder="Confirma la contraseña contraseña">
            </div>
            <div class="mt-3 col-5">
                <label for="">Nuevo Email</label>
                <input type="text" class="form-control" placeholder="Cambiar Email">
            </div>
            <div class="mt-3 col-5">
                <label for="">Conrfirmar Nuevo Email</label>
                <input type="text" class="form-control" placeholder="Confirma el Email">
            </div>
            <div class="mt-3 col-5">
                <label for="" class=""> Nombre de Usuario</label>
                <input type="text" class="form-control" placeholder="Nombre de usuario">
            </div>
            <div class="mt-3 col-5">
                <label for="">Confirmar nombre de Usuario</label>
                <input type="text" class="form-control" placeholder="Confirma el nombre de usuario">
            </div>
            <div class="mt-3 col-5">
                <label for="" class="text-center">Porfavor, ingrese la contraseña anterior para confirmar los cambios.</label>
                <input type="text" class="form-control" placeholder="Contraseña">
            </div>
        </div>
        <div class="col-2 text-center mb-5">
        <button type="submit" class="btn btn-dark"> Confirmar</button>
        </div>
</form>
@endsection
