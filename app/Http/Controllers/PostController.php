<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    //
    public function noticias(Request $request){
    	$noticias = Post::where('category_id', 1)
    				->orderBy('created_at', 'desc')->paginate(6);
        return view('noticias-eventos.noticias', compact('noticias'));
    }

    public function eventos(Request $request){
    	$eventos = Post::where('category_id', 2)
    				->orderBy('created_at', 'desc')->paginate(6);
        return view('noticias-eventos.eventos', compact('eventos'));
    }

    public function blog(Request $request){
    	$entradas = Post::where('category_id', 3)
    				->orderBy('created_at', 'desc')->paginate(6);
        return view('blog.index', compact('entradas'));
    }


    public function noticia_slug($slug){
    	$noticia = Post::where('slug', $slug)->first();
    	$fecha = date($noticia->created_at);
        return view('noticias-eventos.ver-noticia', compact('noticia', 'fecha'));
    }

    public function evento_slug($slug){
    	$evento = Post::where('slug', $slug)->first();
    	$fecha = date($evento->created_at);
        return view('noticias-eventos.ver-evento', compact('evento', 'fecha'));
    }

    public function blog_slug($slug){
    	$entrada = Post::where('slug', $slug)->first();
    	$fecha = date($entrada->created_at);
        return view('blog.entrada', compact('entrada', 'fecha'));
    }
}
