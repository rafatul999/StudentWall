<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Category;
use App\Models\Library;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
    public function index()
    {
       $about = About::all();
       $library= Library::all();
       $categories= Category::all();
       
       return view('welcome', compact('about','library','categories')); 
    }
}
