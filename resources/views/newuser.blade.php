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
    <form method="POST" action="{{
route('save.new.user')}}">
        {{csrf_field()}}
        First Name: <br>
        <input type="text" id="first_name" name="first_name" value=""/><br>
        Last Name:  <br>
        <input type="text" id="last_name" name="last_name" value=""/><br>
        E-Mail: <br>
        <input type="text" id="email" name="email" value="" /><br>
        Password: <br>
        <input type="password" id="pass_word" name="pass_word" value=""/><br><br>
        Role:
        <select name="roleid" value="">
            <option value="1">Admin</option>
            <option value="2">User</option>
        </select><br><br>
        <input type="submit" value="Create" class="btn btn-primary" />
        <input type="reset" value="Clear" class="btn btn-primary" />



    </form>



</div>

