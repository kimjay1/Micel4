@extends("template.template")

@section("content")

<div class="well-md">
	<h1>Add User</h1>

	{{ Form::open(array('route' => 'users.store')) }}  

	<div class="form-group">
		<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="email" id="email" placeholder="Email Address"/>
	</div>
    <div class="form-group">
      <input type="password" data-minlength="6" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
      <span class="help-block">Minimum of 6 characters</span>
    </div>
    </div>
    <div class="form-group">
		<button class = 'btn btn-primary pull-right'>Submit</button>
	</div>
	{{ Form::close() }} 

  </div>

  @stop
	
