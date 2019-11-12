

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="col-md-4 offset-9" style="padding-top:60px;">
    {{$request->session()->get('first_name')}}
    {{$request->session()->get('last_name')}}
    <a href="/logout">Log out</a>
</div>
<div  class="col-md-4 offset-1">

    <a href="/userhome">Home</a>


</div>
<hr>
<div  class="col-md-4 offset-3">
<h1>New Ticket</h1>

<form method="POST" action="{{
route('save.new.ticket')}}">
    {{csrf_field()}}

	Task Topic :
	<input type="text" name="task_topic" /> <br>
	Task Detail :
    <textarea name="task_detail" style="width:100%"></textarea>
    <br><br>
	Task Topic Type
	<select name="idtask_topic_type"> <br>
		<option value="1">Complaint</option>
		<option value="2">Suggest</option>
	</select><br> <br>
	Task Priority
	<select name="idtask_priority"> <br>
		<option value="1">Very Important</option>
		<option value="2">Important</option>
		<option value="3">Not Important</option>
	</select><br>
	<!-- Created by<input type="text" name="created_by">-->

    <br>
    <select name="idtask_process">
        <option value="1">Process</option>
    </select>
    <br><br>
	<input type="submit" value="Create" value="Create" class="btn btn-primary"/>
	<input type="reset" value="Clear" value="Create" class="btn btn-primary"/>


</form>
</div>

