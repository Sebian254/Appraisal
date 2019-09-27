@extends('Dashboard')
@section('content')
	<div class="container">

		<form action="{{ url('/saveUser')}}" method="post" style="margin-top: 20px;">
			@csrf
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="Name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="Email" class="form-control">
			</div>
			<div class="form-group">
				<label for="ID number">ID number</label>
				<input type="text" name="IDnumber" class="form-control">
			</div>
			<div class="form-group">
				<label for="Employee ID">Employee ID</label>
				<input type="text" name="EmployeeID" class="form-control">
			</div>
			<div class="form-group">
				<label for="department">Department</label>
				<input type="text" name="Department" class="form-control">
			</div>
			<button class="btn btn-primary">Submit</button>
		</form>
		
	</div>
@endsection