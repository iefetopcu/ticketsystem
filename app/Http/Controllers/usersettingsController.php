<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\role;

use Illuminate\Http\Request;

class usersettingsController extends Controller
{
    public function index($idapp_user,Request $request){

        $showuser = user::where('idapp_user',$idapp_user)->firstorFail();
        return view('usersettings', compact('showuser','request'));
    }

}
