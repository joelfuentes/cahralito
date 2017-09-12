<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
      //obtener los ultimos posts de la base de datos
      //usando tinker
      $blogs=Blog::latest()->get();
      return view('blog.index', compact('blogs'));
    }
//funcion create
    public function create()
    {
      return view('blog.create');
    }

    //store
    public function store(Request $request)
    {
      $input = $request->all();
      //var_dump($input); //permite imprimir en pantalla una prueba de lo que se envia
      Blog::create($input);
      return back();
    }

    //mostrar por id
    public function show($id)
    {

    }
}
