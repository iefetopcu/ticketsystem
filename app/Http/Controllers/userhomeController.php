<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\ticket;
use Illuminate\Http\Request;

class userhomeController extends Controller
{
    public function index(Request $request){

        $userlist = user::all();
        $ticketlist = ticket::where('created_by', $request->session()->get('idapp_user'))->where('show_in_list',1)->paginate(5);
        return view('userhome',compact('ticketlist','userlist' , 'request'));
    }

}
