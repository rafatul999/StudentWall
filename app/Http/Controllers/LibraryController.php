<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Library;

class LibraryController extends Controller
{
     public function index()
    {
       $library= Library::all();
       $categories= Category::all();
       
       return view('library.index', compact('library','categories')); 
    }


     public function library(){
        $library= Library::all();
        $categories= Category::all();
        return view('library.library', compact('library','categories'));
    }
   public function show($id){

        $library = Library::find($id);
        return view('library.view', compact('library'));
         }
}
