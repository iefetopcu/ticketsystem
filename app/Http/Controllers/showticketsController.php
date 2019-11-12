<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Models\ticket;

class showticketsController extends Controller
{
    public function index($task_id,Request $request){

        $showticket = ticket::where('idtask',$task_id)->firstorFail();
        $userlist = user::all();
    	return view('showtickets',compact('showticket','request','userlist'));
    }
}
