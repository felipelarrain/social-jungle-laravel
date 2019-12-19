@extends('layouts.master')
<title> Configuracion </title>
@section('contenido')

<form method="POST" action="{{ route('') }}" class="container-fluid">
    @csrf
    <div class="col-12 mt-5 rounded">
        <div class="row bg-white pb-5">
            <div class="mt-3 col-5">
                <label for="name" class="">{{ __('Nombre') }}</label>

            <div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ Auth::user()->name }}" required autocomplete="name" autofocus placeholder="Nombre">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            </div>

            <div class="mt-3 col-5 ">
                <label for="name" class="">{{ __('Apellido') }}</label>
                <div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ Auth::user()->apellido }}" required autocomplete="name" autofocus placeholder="Apellido">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mt-3 col-5 ">
                <label for="name" class="">{{ __('Nombre de Usuario') }}</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ Auth::user()->username }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-3 col-5 ">
                <label for="name" class="">{{ __('Confirmar Nombre de Usuario') }}</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ Auth::user()->username }}" required autocomplete="name" autofocus placeholder="Confirmar Nombre de Usuario">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="mt-3 col-5 ">
                <label for="email" class="">{{ __('E-Mail') }}</label>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ Auth::user()->email }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mt-3 col-5 ">
                <label for="email" class="">{{ __('Confirmar Email') }}</label>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ Auth::user()->email }}" required autocomplete="email" placeholder="Confirmar Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <!-- <div class="mt-3 col-5 ">
                <label for="password" class="">{{ __('Contraseña') }}</label>

                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Contraseña">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-3 col-5 ">
                <label for="password-confirm" class="">{{ __('Repetir Contraseña') }}</label>

                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Confirmar contraseña">
                </div>
            </div> -->

            <div class="mt-3 col-5 text-center mb-5">
                <div class="">
                    <button type="submit" class="btn btn-dark">
                        {{ __('Guardar Cambios') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
