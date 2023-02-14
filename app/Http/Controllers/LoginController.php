<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('register', $data);
    }

    public function register_action(Request $request)
    {
        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect('/')->with('success', 'Registration Berhasil. Silahkan login');
    }

    public function login_action(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('/index');
        };
    }
}