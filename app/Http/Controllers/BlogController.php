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
      $blog =   Blog::findOrFail($id);
      return view ('blog.show', compact('blog'));
    }

    //editar posts
    public function edit($id)
    {
      $blog = Blog::findOrFail($id);
      return view('blog.edit', compact('blog'));
      // var_dump($blog);
    }

    // update
    public function update(Request $request, $id)
    {
      $input = $request->all();
      $blog=Blog::findOrFail($id);
      $blog->update($input);
      return redirect('/blog');
      // var_dump($input);
    }

    //delete (borra permanenetemente)
    public function destroy(Request $request, $id)
    {
      $blog=BLog::findOrFail($id);
      $blog->delete($request->all());
      return redirect('/blog/bin');
    }

    //soft delete (es posible regresar lo borrado)
    public function bin()
    {
      $deletedBlogs = Blog::onlyTrashed()->get();

      return view('blog.bin', compact('deletedBlogs'));
    }

    //recuperar blogs borrados
    public function restore($id)
    {
      $restoredBlogs=Blog::onlyTrashed()->findOrFail($id);
      $restoredBlogs->restore($restoredBlogs);
      return redirect('/blog');

    }

    public function destroyBlog($id)
    {
      $destroyBlog=Blog::onlyTrashed()->findOrFail($id);
      $destroyBlog->forceDelete($destroyBlog);
      return back();
    }
}
