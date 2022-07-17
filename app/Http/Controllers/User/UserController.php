<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller 
{
    function create(Request $request){
        //validate Inputs
        $request->validate([
            'name'=>'required',
            // 'university'=>'required',
            // 'department'=>'required',
            // 'studentid'=>'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8','max:30'],
            'cpassword'=>['required', 'string', 'min:8','max:30','same:password'],


        ]);
        $user = new User();
        $user->name = $request->name;
        // $user->university = $request->university;
        // $user->department = $request->department;
        // $user->studentid = $request->studentid;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $save = $user->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to register');
          }
    }
    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email' => ['required', 'string', 'email', 'max:255', 'exists:users,email'],
           'password' => ['required', 'string', 'min:8','max:30'],
        ],[
            'email.exists'=>'This email is not exists on users table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
