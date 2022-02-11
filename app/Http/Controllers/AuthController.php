<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
    	return view('auth.register');
    }

    public function registerStore(Request $request)
    {
    	$data = $request->validate([
    		'name' => 'required|max:255',
    		'email' => 'required',
    		'password' => 'required|min:5'
    	]);

    	$data['password'] = bcrypt($data['password']);

    	User::create($data);

    	return redirect()->route('login')->with('pesan','Silahkan Masukan Email dan password anda');
    }

    public function login()
    {
    	return view('auth.login');
    }

    public function loginStore(Request $request)
    {
    	$data = $request->validate([
    		'email' => 'required|email',
    		'password' => 'required|min:5'
    	]);

    	if(Auth::attempt($data)){
    		$request->session()->regenerate();

    		return redirect()->route('home');
    	}

    	return back()->with('error', 'email atau password salah');
    }

    public function logout(Request $request)
    {
    	Auth::logout();
    	$request->session()->invalidate();
    	$request->session()->regenerateToken();
    	return redirect()->route('login');

    }
}
