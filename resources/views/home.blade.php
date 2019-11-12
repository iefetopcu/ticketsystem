<div class="col-md-4 offset-5" style="padding-top:60px;">
    <img src="https://www.faveohelpdesk.com/wp-content/uploads/2018/07/faveo-slider.png"width="170">
</div>
<hr>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <div class="row">

    <div class="col-md-4 offset-5" style="padding-top:60px;">

        <h3>Login</h3>

<form method="POST" action="{{route('login.form')}}">
    <div class="form-group">
    {{csrf_field()}}
        <label  for="exampleInputEmail1">E-Mail</label><br> <input type="text" name="email" value=""/><br>
        <label for="exampleInputEmail1"">Password</label> <br><input type="password" name="pass_word" value=""/><br><br>
    <input type="submit" value="SIGN IN" class="btn btn-primary"/>
    </div>
</form>
        <h6 style="color:#3C7DC6; font-size: 12px;" >Please log in to report your problem.</h6>
</div>
   </div>
<br><br>
<hr>
<div class="col-md-4 offset-5" style="color:#F15EE0; ">
    <h6>Don't forget to follow us on social media</h6>


</div>

