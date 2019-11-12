<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class newuserController extends Controller
{

    public function index(Request $request){

        return view('newuser',compact('request'));;
    }

    public function saveuser_form()
    {
    return view('save.new.user');

    }

    public function saveuser()
    {

        $this->validate(request(),[
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $user = user::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'pass_word' => Hash::make(request('pass_word')),
            'roleid' => request('roleid')



        ]);
        return redirect('users');
    }


}
