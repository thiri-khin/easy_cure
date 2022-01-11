@extends('backend_template')
@section('content')
<div class="card shadow mx-3 my-3">
	<div class="card-body">
		<form class="form-group" action="{{route('DoctorBackend.update',$doctor->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="container-fluid">
		<h3 class="text-primary font-weight-bold">Doctor Edit Form</h3>

		<div class="row">
			<div class="offset-md-3 col-md-6">
				<div class="form-group">
					<input type="hidden" name="user_id" value="{{$doctor->user_id}}">
					<label>Name:</label>
					<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$doctor->user->name}}">
					@error('name')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					

					<label for="speciality">Speciality:</label>
					<select class="form-control @error('speciality') is-invalid @enderror" name="speciality">
						<option value="{{$doctor->speciality->id}}" >{{$doctor->speciality->speciality}}</option>
					</select>
					@error('speciality')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror <br>

					<label>DoctorFee:</label>
					<input type="text" name="doctorFee" class="form-control @error('doctorFee') is-invalid @enderror" value="{{$doctor->doctorfee}}">
					@error('doctorFee')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror <br>

					<label>Phone:</label>
					<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$doctor->phone}}">
					@error('phone')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror <br>

					<label>Email:</label>
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$doctor->user->email}}">
					@error('email')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror <br>

					<label>Password:</label>
					<input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{$doctor->user->password}}">
					@error('password')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror <br>

					<label>Address:</label>
					<textarea name="address" class="form-control @error('address') is-invalid @enderror" name="address">{{$doctor->address}}</textarea>
					@error('address')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror <br>

					<button type="submit" class="btn btn-outline-primary my-3">Update</button>
				</div>	
			</div>
		</div>	
		</div>	
	</form>
</div>
</div>
@endsection