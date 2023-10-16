<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $validate_data=$request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if(auth()->attempt($validate_data)){
                return redirect()->route('tasks.index')->with('success','Logged In Successfully');
            }else{
                return back()->with('error','Invalid Credentials');
            }
        }else{
            return view('auth.login');
        }
    }
    public function register(Request $request)
    {
        if($request->isMethod('post'))
        {
         $validate_data=$request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);
         $validate_data['password']=Hash::make($validate_data['password']);
         $user=User::create($validate_data);
         auth()->login($user);
            return redirect()->route('tasks.index')->with('success','User Created Successfully');
        }else{
            return view('auth.register');
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success','Logout Successfully');
    }
}
