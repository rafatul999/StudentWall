<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CroomController extends Controller
{
    public function index(){

        return view ('croom.index');
    }

    public function contact(){

        return view ('croom.contact');
    }
}
