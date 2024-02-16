<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function register(){
        return view("auth.register");
    }
    public function aksi_login(Request $request){
        $validate = $request->validate([
            "email"=> "required|email:dns",
            "password"=> "required|min:4|max:255",
        ]);
        if (Auth::attempt($validate)) {
            // return redirect()->with("success","");
            return redirect()->intended("/produk");
        }
        else {
            // return redirect()->back()->withErrors('');
            return redirect('/login')->with('wrong','Email Or Password Wrong!');
        }
    }
    public function aksi_register(Request $request){
        $validate = $request->validate([
            'name'=> 'required|max:255|min:4',
            'email'=> 'required|unique:users|email:dns',
            'password'=> 'required|min:4|max:255'
        ]);
        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);
        return redirect('/login')->with('success','Register Succesfully!');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
