<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;


class homeController extends Controller
{

    public function index(){
        return view('home');
    }

    public function login_form(){
        return view('home');

    }
    public function login(){

        $this->validate(request(),[
            'email' => 'required',
            'pass_word' => 'required'
        ]);

        if (Auth()->attempt([
            'email' => request('email'),
            'password' => request('pass_word')
        ]))
            $roleid = auth()->user()->roleid;

            request()->session()->put('idapp_user',auth()->user()->idapp_user );
            request()->session()->put('first_name',auth()->user()->first_name );
            request()->session()->put('last_name',auth()->user()->last_name );
            if($roleid==1){
                return redirect()->route('admintickets');
            }
            else{
                return redirect()->route('userhome');

            }



    }
    public function logout(){
        Auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('login.form');

    }
}
