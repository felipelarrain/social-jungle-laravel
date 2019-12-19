<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdministrarUsuarioController extends Controller
{
    public function config(){
        return view('user.configuracion');
    }

    public function update(Request $request){
        $id = \Auth::user()->id;
        $name = $request->input('name');
        $apellido = $request->input('apellido');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        // dd($id);
        // dd($name);
        dd($apellido);
        dd($username);
    }
}
