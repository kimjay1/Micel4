<html>
<head>
 	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">	
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
{{ HTML::style('bootstrap/css/bootstrap.css') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="well">
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
	{{ Form::open(array('url' => 'login')) }}
		<center><h3>MSU-IIT Center for e-Learning</h3></center>
			<!-- if there are login errors, show them here -->
			<div class="alert alert-danger" role="alert">
  				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  				<span class="sr-only">Error:</span>
  				{{ $errors->first('email') }}
			    {{ $errors->first('password') }}
			</div>
			    			
        <div class="form-group">
           {{	Form::text('email', Input::old('email'), array('class' => 'form-control','placeholder' => 'Email'))	}}
        </div>
        <div class="form-group">
            {{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) }}
        </div>
        {{ Form::button(
   		 '<h4 class="glyphicon glyphicon-log-in"></h4>',
   		 array(
        	'class'=>'btn btn-success btn-block',
        	'type'=>'submit')) 
		}}
      	{{	Form::close() }}
    	</div>

    	</div>
	</div>    	
</div>
</div>    	

<script src="../bootflat/js/bootstrap.min.js"></script>
<script src="../bootflat/js/jquery-1.10.1.min.js"></script>
{{HTML::script('/bootflat/bootflat/js/jquery.fs.selecter.min.js')}}
{{HTML::script('/bootflat/bootflat/js/jquery.fs.stepper.min.js')}}
{{HTML::script('/bootflat/bootflat/js/icheck.min.js')}}