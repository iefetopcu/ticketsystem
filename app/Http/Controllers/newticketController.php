<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\ticket;
use Illuminate\Http\Request;

class newticketController extends Controller
{
    public function index(Request $request){
        $userlist = user::all();
        $ticketlist = ticket::all();
        return view('newticket',compact('userlist' , 'request'));


    }

    public function saveticket_form()
    {
        return view('save.new.ticket');

    }

    public function saveticket(Request $request)
    {

        $this->validate(request(),[
            'task_topic' => 'required',
            'task_detail' => 'required'
        ]);
        $ticket = ticket::create([
            'task_topic' => request('task_topic'),
            'task_detail' => request('task_detail'),
            'idtask_topic_type' => request('idtask_topic_type'),
            'idtask_priority' => request('idtask_priority'),
            'created_by' => $request->session()->get('idapp_user'),
            'idtask_process' => request ('idtask_process')


        ]);
        return redirect('userhome');
    }
}
