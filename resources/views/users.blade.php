<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<div class="col-md-4 offset-9" style="padding-top:60px;">

    {{$request->session()->get('first_name')}}
    {{$request->session()->get('last_name')}}
    <a href="/logout">Log out</a>
</div>


<div class="col-md-4 offset-1">
    <a href="/admintickets">Admin Panel</a><br>
    <a href="/users">User Settings</a><br>
    <a href="/newuser">New User</a>

</div>

<hr>
<div class="col-md-4 offset-3" >
    <h1>Users</h1>
    @foreach($userlist as $user)
        <a href="{{ route('usersettings',$user->idapp_user)}}">
            {{$user->first_name}}

        </a>
        <br>
    @endforeach


</div>

