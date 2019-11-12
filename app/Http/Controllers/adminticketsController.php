<?php

namespace App\Http\Controllers;


use App\Models\ticket;
use App\user;
use Illuminate\Http\Request;

class adminticketsController extends Controller
{
    public function index(Request $request){
        $userlist = user::all();
        $ticketlist = ticket::all()->take(10);
        return view('admintickets', compact('ticketlist','userlist','request'));
    }

    public function search()
    {
        $searched = request()->input('searched');
        $searched_ticket = ticket::where('idtask','like','$searched')->get();
        request()->flash();
        return view('searched',compact('searched_ticket'));
    }
}
