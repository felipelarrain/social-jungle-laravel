<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdministrarUsuarioController extends Controller
{
    public function config(){
        return view('configuracion');
    }

    public function update(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
    }
}
