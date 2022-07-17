<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Carbon\Carbon;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.aboutus.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutus.create');
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
        'name' => 'required', 
        'details' => 'required',
        'image' => 'required | mimes:jpeg,jpg,png',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if(isset($image)){
            $currentDate=Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/about')) {
                mkdir('uploads/about',007,true);
            }
            $image->move('uploads/about',$imagename);
        }else{
            $imagename='default.png';
        }
        $about = new About();
        $about->name=$request->name;
        $about->details=$request->details;
        $about->image=$imagename;

        $about->save();
        return redirect()->route('admin.about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = About::find($id);
        return view('admin.aboutus.view', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.aboutus.edit',compact('about'));

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
       'name' => 'required',
       'details' => 'required'
       ]);
       $image = $request->file('image');
       $slug = str_slug($request->name);

       $about = About::find($id);

       if(isset($image)){
        $currentDate = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/about')){
           mkdir('uploads/about', 007 , true);
        }
        $image->move('uploads/about',$imagename);
       }else{
        $imagename = $about->image;
       }
       $about->name = $request->name;
       $about->details = $request->details;
       $about->image=$imagename;
       $about->save();
       return redirect()->route('admin.about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
         if(file_exists('uploads/about/'.$about->image)){
        unlink('uploads/about/'.$about->image);
        $about->delete();
        return redirect()->route('admin.about.index');
       }
    }
}
