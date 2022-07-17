<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller 
{
    function create(Request $request){
        //validate Inputs
        $request->validate([
            'name'=>'required',
            // 'university'=>'required',
            // 'department'=>'required',
            // 'studentid'=>'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:teachers'],
            'password' => ['required', 'string', 'min:8','max:30'],
            'cpassword'=>['required', 'string', 'min:8','max:30','same:password'],


        ]);
        $teacher = new Teacher();
        $teacher->name = $request->name;
        // $user->university = $request->university;
        // $user->department = $request->department;
        // $user->studentid = $request->studentid;
        $teacher->email = $request->email;
        $teacher->password = \Hash::make($request->password);
        $save = $teacher->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to register');
          }
    }
    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email' => ['required', 'string', 'email', 'max:255', 'exists:teachers,email'],
           'password' => ['required', 'string', 'min:8','max:30'],
        ],[
            'email.exists'=>'This email is not exists on teachers table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('teacher')->attempt($creds) ){
            return redirect()->route('teacher.dashboard');
        }else{
            return redirect()->route('teacher.login')->with('fail','Incorrect credentials');
        }
    }

    function logout(){
        Auth::guard('teacher')->logout();
        return redirect('/');
    }
}
