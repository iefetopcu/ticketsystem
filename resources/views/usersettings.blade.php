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
</div>

<hr>
<div class="col-md-4 offset-3">
<form>



    <h3>User Settings</h3>

    <h4>
        USER ID : {{$showuser->idapp_user}}
    </h4>
    <form>
        {{csrf_field()}}
    <h5>
        Role : <br>{{$showuser->roleid}}
    </h5>
    <h5>
        First Name : <br><input type="text" value="{{$showuser->first_name}} " />
    </h5>
    <h5>
        Last Name :    <br><input type="text" value="{{$showuser->last_name}}" />
    </h5>
    <h5>
        E-Mail :    <br> <input type="text" value="{{$showuser->email}}" />
    </h5>
    <h5>
        Row Status :   <select  name="row_status">
           <option value="1">
               {{$showuser->row_status}}

           </option>

        </select> <br>
    </h5>
    <h5>
        is Active :
        <select name="is_active">
            <option value="1" >
                {{$showuser->is_active}}
            </option>

        </select>
    </h5>
    <input type="submit" value="Update User" class="btn btn-primary">
</form>

</div>
