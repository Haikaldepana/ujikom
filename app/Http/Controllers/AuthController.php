<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

    public function register()

    {
        return view('register');
    }

    public function registerPost(Request $request)
    {

        // return $request->password;
        $User = new User();

        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);

        $User->save();

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
// return Hash::make('123');
        if (Auth::attempt($credetials)) {
            // return "berhasil";
            return redirect('/home')->with('success','login berhasil');
        };
        return back()->with('error', 'email or password salah');
    }
}