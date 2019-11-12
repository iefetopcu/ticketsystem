<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="col-md-4 offset-9" style="padding-top:60px;">

    {{$request->session()->get('first_name')}}
    {{$request->session()->get('last_name')}}
    <a href="/logout">Log out</a>
</div>



<div class="col-md-4 offset-1">
<a href="/newticket">New Ticket</a> <br>
<a href="/userhome">Home</a>
</div>
<hr>
<div class="col-md-4 offset-3">
    <table style="width:130%" class="table table-bordered">
        <tr>
            <th style="width:80%">Ticket ID</th>
            <th style="width:20%">Process</th>

        </tr>
        <tr>
            <td>{{$showticket->idtask}}</td>
            <td>{{$showticket->idtask_process}}</td>

        </tr>
        <tr>
            <th>Task Priority</th>
            <th>Task Topic Type</th>

        </tr>
        <tr>
            <td>{{$showticket->idtask_priority}}</td>
            <td>{{$showticket->idtask_topic_type}}</td>

        </tr>
        <tr>
            <th>Task Topic</th>
            <th>Created By</th>

        </tr>
        <tr>
            <td>{{$showticket->task_topic}}</td>
            <td>{{$showticket->created_by}}</td>

        </tr>
        <tr>
            <th>Task Detail</th>


        </tr>
        <tr>
            <td>{{$showticket->task_detail}}</td>


        </tr>
    </table>
    <form>

        <textarea style="width:130%" name="comment" placeholder="Answer the ticket"></textarea><br><br>
        <input type="submit" value="Answer" class="btn btn-primary"/>
    </form>
</div>
