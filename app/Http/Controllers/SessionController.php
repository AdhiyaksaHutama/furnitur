<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class SessionController extends Controller
{



    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        Session::flash('email',$request -> email);
        $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);
        $infoLogin =[
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infoLogin)) {
            return redirect('home')->with('success','Berhasil login ');
        }else{
            //return 'gagal';
            return redirect('login')->with('error','Email atau password yang dimasukkan tidak valid');
        }
    }

    
}
