@extends("template.template")

@section("content")

	<div class="table-responsive">
 <!-- 	<button class='btn btn-active pull-right'><a href='colleges/create'>Add College</a></button> -->
		<table class = "table table-hover table-bordered">
			<h1>User Accounts</h1>
				<div class="form-group">
				<a href="users/create"><button class = "btn btn-primary">Add User</button></a>
				</div>
			<tr>
				<th>Name</th>
				<th>Email Address</th>
				<th>Username</th>
				<th>Role</th>
				<th>Created at</th>
				<th>Action</th>
			</tr>
			@foreach($users as $user)
			<tr>
				<td> <a href="users/{{ $user->id }}">{{ $user->fname }} {{ $user->lname }}</a></td>
				<td> {{ $user->email }}</td>
				<td> {{ $user->username }}</td>
				<td> {{ $user->app_role }}</td>
				<td> {{ $user->created_at }}</td>
			</tr>
			@endforeach
		</table>
		
	</div>

@stop