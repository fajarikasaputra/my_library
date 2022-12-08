<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        if (Auth::check()) {
            return redirect('peminjaman');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('peminjaman');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/home');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
