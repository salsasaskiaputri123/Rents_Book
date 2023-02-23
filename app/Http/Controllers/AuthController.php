<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }

    public function indexLogin(){
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
 
        $user = $request->only('name', 'password');
        if(Auth::attempt($user)){
            if(Auth::user() && Auth::user()->role_id == 1){
                return redirect('users');
            }
            return redirect('/dashboard-user')->with('success', 'Berhasil login');
        }

      
    }

    public function registerAccount(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'address' => $request->address,
        ]);
        return redirect('/index-login')->with('success', 'Registrasi berhasil! , silahkan Login');
    }

    
}
