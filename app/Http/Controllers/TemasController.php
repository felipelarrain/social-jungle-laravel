<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;

class TemasController extends Controller
{
  public function index () {
      $temas = Tema::all();
      return view('temasreg')->with('temas', $temas);
  }

  public function temas ($id){
    dd($id);
  }
}
