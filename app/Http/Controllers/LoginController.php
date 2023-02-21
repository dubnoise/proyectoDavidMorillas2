<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->birthday = $request->get('birthday');
        $user->save();

        if ($request->hasFile('profile_img')){
            $file = $request->file('profile_img');
            $destinationPath = 'profileImg/';
            $fileName = $user->id.'.jpg';
            $uploadSucces = $request->file('profile_img')->move($destinationPath, $fileName);
        }

        Auth::login($user);

        return redirect()->route('users.index');
    }

    public function loginForm(){
        if (Auth::viaRemember()){
            return 'Bienvenido de nuevo.';
        }
        else{
            if (Auth::check()){
                return redirect()->route('inicio');
            }
            else{
                return view('auth.login');
            }
        }
    }
    public function login(Request $request){
        $credenciales = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credenciales)){
            $request->session()->regenerate();
            return redirect()->route('inicio');
        }
        else{
            $error = 'Email o contraseña incorrectos.';
            return view('auth.login', compact('error'));
        }
    }
    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
