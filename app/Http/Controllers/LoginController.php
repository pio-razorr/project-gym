<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;

class LoginController extends Controller
{
    function index()
    {
        return view("auth.login");
    }

    function login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return view ("admin.dashboard") ;
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return view ('auth.login');
        }
    }

    function index_register()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Session::flash('message', 'Register Berhasil.');
        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


}


