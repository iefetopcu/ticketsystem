<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\ticket;
use Illuminate\Http\Request;

class showadminticketsController extends Controller
{
    public function index($task_id,Request $request){

        $showticket = ticket::where('idtask',$task_id)->firstorFail();

        return view('showadmintickets',compact('showticket','request'));
    }
}
