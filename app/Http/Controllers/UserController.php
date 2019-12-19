<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function config(){
        return view('configuracion');
    }

    public function update(Request $request){
        $id = \Auth::user();

        auth()->user()->update([
            'name' => $request->get('name'),
            'apellido' => $request->get('apellido'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
        ]);

        // $request->input('name');
        // $apellido = $request->input('apellido');
        // $username = $request->input('username');
        // $email = $request->input('email');
        // // $password = $request->input('password');

        // dd($id);
        // dd($name);
        // dd($apellido);
        // dd($username);
    }
}
