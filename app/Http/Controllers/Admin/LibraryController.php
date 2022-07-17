<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\library;
use App\Models\Category;
use Carbon\Carbon;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $library = Library::all();
        return view('admin.library.index',compact('library'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.library.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'category' => 'required',
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:jpeg,jpg,png',
        'file' => 'required',
         ]);

        $image = $request->file('image');
        $file = $request->file('file');
        $slug = str_slug($request->name);

        if (isset($image)){
            $currentDate= Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->
            getClientOriginalExtension();

            if(!file_exists('uploads/library')){
                mkdir('uploads/library', 007 ,true);
            }
            $image->move('uploads/library',$imagename);
        }
        else{
            $imagename = 'default.png';
            }

        if (isset($file)){
         $filename = $slug.'-'.$currentDate.'-'.'.'.$file->getClientOriginalExtension();

         if(!file_exists('uploads/library')){
                mkdir('uploads/library', 007 ,true);
            }
            $file->move('uploads/library',$filename);
        }
        else{
            $filename = 'default.pdf';
            }


        $library = new Library();
        $library->category_id = $request->category;
        $library->name = $request->name;
        $library->description =$request->description;
        $library->image = $imagename;
        $library->file = $filename;

        $library->save();
        return redirect()->route('admin.library.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $library = Library::find($id);
        return view('admin.library.view', compact('library'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $library = Library::find($id);
       $categories=Category::all();
       return view('admin.library.edit',compact('library','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'category' => 'required',
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:jpeg,jpg,png',
        'file' => 'required',
         ]);

        $image = $request->file('image');
        $file = $request->file('file');
        $slug = str_slug($request->name);
        
        // for image
        if (isset($image)){
            $currentDate= Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->
            getClientOriginalExtension();

            if(!file_exists('uploads/library')){
                mkdir('uploads/library', 007 ,true);
            }
            $image->move('uploads/library',$imagename);
        }
        else{
            $imagename = 'default.png';
            }

        // for file
        if (isset($file)){
         $filename = $slug.'-'.$currentDate.'-'.'.'.$file->getClientOriginalExtension();

         if(!file_exists('uploads/library')){
                mkdir('uploads/library', 007 ,true);
            }
            $file->move('uploads/library',$filename);
        }
        else{
            $filename = 'default.pdf';
            }


        $library =Library::find($id);
        $library->category_id = $request->category;
        $library->name = $request->name;
        $library->description =$request->description;
        $library->image = $imagename;
        $library->file = $filename;

        $library->save();
        return redirect()->route('admin.library.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $library = library::find($id);
        if(file_exists('uploads/library/'.$library->image)){
            unlink('uploads/library/'.$library->image);
        }
        if(file_exists('uploads/library/'.$library->file)){
            unlink('uploads/library/'.$library->file);
        }
        $library->delete();
        return redirect()->route('admin.library.index'); 
    }
}
