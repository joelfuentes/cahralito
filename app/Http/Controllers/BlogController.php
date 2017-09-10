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
}
