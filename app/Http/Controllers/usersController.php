<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(Request $request){
       $userlist = user::all()->take(10);

       //$userlist = user::with(['role'])->get();
        return view('users', compact('userlist','request'));
    }
}
