<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/temasreg';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string' ,'min:4', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'max:255', 'min:6', 'confirmed'],
            'birthdate' => ['required'],
            'genero' => ['required'],
            // 'foto_usuario' => 'sometimes|mimes:jpeg,jpg,png,gif|max:100000' No funciona el validador de imagenes
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (isset($data['foto_usuario'])) {
            $request = request();
            $imagen = $request->file('foto_user');
            $nombreArchivo = uniqid($data['username'].'-'). '.' . $imagen->extension();
            $imagen->storePubliclyAs('public/avatar',$nombreArchivo);
        return User::create([
            'name' => $data['name'],
            'apellido' => $data['apellido'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'birthdate' => $data['birthdate'],
            'genero' => $data['genero'],
            'foto_user' => $nombreArchivo
        ]);
    }else{
        return User::create([
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'birthdate' => $data['birthdate'],
            'genero' => $data['genero'],
            'password' => Hash::make($data['password']),
            'foto_usuario' => "default.jpg"
            ]);
        }
    }
}
