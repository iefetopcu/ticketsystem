<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="col-md-4 offset-9" style="padding-top:60px;">

    {{$request->session()->get('first_name')}}
    {{$request->session()->get('last_name')}}
    <a href="/logout">Log out</a>

    <form action="{{route('search_ticket')}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="searched_ticket" placeholder="Search Ticket"/>

        <input type="submit" value="Search">

    </form>
</div>
<div class="col-md-3 offset-1" style="padding-top:20px;">
    <a href="/admintickets">Admin Panel</a><br>
    <a href="/users">User Settings</a><br>



</div>

<hr>

<div class="col-md-4 offset-3" style="padding-top:60px;">
    <h3>Tickets</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Ticket ID</th>
            <th scope="col">Task Topic</th>
            <th scope="col">Process</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ticketlist as $ticket)
            <tr>
                <th scope="row">{{$ticket->idtask}}</th>
                <td> <a href="{{ route('showadmintickets',$ticket->idtask)}}">
                        {{$ticket->task_topic}}</a></td>
                <td>{{$ticket->idtask_process}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>


