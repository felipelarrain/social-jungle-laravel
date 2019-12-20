<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;
use App\Post;
use App\User;
use Auth;

class PostController extends Controller
{
    public function index(){
    $posts = Post::all();
    $temas = Tema::all();
    $usuarios = User::all();
        return view('post')->with('posts', $posts)
                            ->with('temas', $temas)
                            ->with('users', $usuarios);
    
    }
    /*Publicar - el request llama a los datos dentro del metodo post*/

    public function save(Request $request)
    {
        $reglas = [
            'temas_id'=> 'required',
            'titulo' => 'required',
            'mensaje' => 'required',
            'imagen' => 'image',
            
        ];
        //Ahora debo disponer los mensajes en base a las reglas señaladas por cada campo
        $mensajes = [
            'titulo' => 'Escribe un titulo',
            'mensaje' => 'Escribe un mensaje'
            
            
        ];
        
        //Laravel nos ofrece un método para validar al cual le debo pasar los datos del formulario, mas las reglas y los mensajes
        $this->validate($request,$reglas,$mensajes);
        
        /*$posts::save();*/
        /*dd($request);*/
            $posts = new Post;

                $posts->temas_id = $request->input('temas_id');
                $posts->titulo = $request->input('titulo');
                $posts->mensaje = $request->input('mensaje');
                $posts->imagen = $request->input('imagen');
                $posts->users_id = Auth::user()->id;
            $posts->save();
            return  redirect('/post');
        }
            public function delete($id){
                $posts =  Post::find($id);
                $posts->delete();
                return redirect('/post');
          }

<<<<<<< HEAD
          //Función que busca el detalle de un registro en la Base de Datos        
        public function show($id){
            //dd($id);
            $posts = Post::find($id);
            //dd($pelicula->genre);
            //dd($pelicula->genre->name);
            return view('/publicacion')->with('posts',$posts);
        }

=======
          public function userPosts(){
            $id = Auth::user()->id;
            $posts = DB::table('posts')
                       ->select('users.nombres','users.apellidos','users.id', 'posts.id', 'users.foto_usuario','posts.titulo','posts.contenido','posts.like','posts.user_id')
                       ->join('users','users.id','=','posts.user_id')
                       ->where('user_id', '=', $id)
                       ->orderBy('posts.id','desc')
                       ->get();
            return view('profile')->with('posts', $posts);
         }
>>>>>>> 96e6474162a08de0fbc7d3dd44c6cc4b53edef66
}