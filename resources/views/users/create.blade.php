@extends('backend_template')
@section('content')
	<form method="post" enctype="multipart/form-data" action="{{route('users.store')}}" class="form-group">
		@csrf
		<div class="container-fluid">
			<h2>User Form</h2>
			<div class="row">
				<div class="col-md-12">
					<label>Name:</label>
					<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name">

			        @error('name')
    				<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">				
					<label>Email:</label>
					<input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Enter email">

			        @error('email')
    				<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>Password:</label>
					<input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Enter password">

			        @error('password')
    				<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</form>
@endsection


