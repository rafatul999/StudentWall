<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\calender;
use Carbon\Carbon;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calender = Calender::all();
        return view('admin.calender.index',compact('calender'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.calender.create');
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
        'description' => 'required',
        'file' => 'required',
         ]);

        $file = $request->file('file');
        $currentDate= Carbon::now()->toDateString();
        $slug = str_slug($request->name);

        if (isset($file)){
         $filename = $slug.'-'.$currentDate.'-'.'.'.$file->getClientOriginalExtension();

         if(!file_exists('uploads/calender')){
                mkdir('uploads/calender', 007 ,true);
            }
            $file->move('uploads/calender',$filename);
        }
        else{
            $filename = 'default.pdf';
            }

        $calender = new Calender();
        $calender->name = $request->name;
        $calender->description =$request->description;
        $calender->file = $filename;

        $calender->save();
        return redirect()->route('admin.calender.index');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $calender = Calender::find($id);
        return view('admin.calender.view', compact('calender'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $calender = Calender::find($id);
         if(file_exists('uploads/calender/'.$calender->file)){
        unlink('uploads/calender/'.$calender->file);
        $calender->delete();
        return redirect()->route('admin.calender.index');
    }
}
}
