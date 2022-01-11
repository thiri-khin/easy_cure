@extends('backend_template')
@section('content')
	<div class="card shadow mx-3 my-3">
	<div class="card-body">
		
	<form method="post" enctype="multipart/form-data" action="{{route('DoctorBackend.store')}}">
		@csrf
	<div class="container-fluid">
		
			<h3 class="text-primary font-weight-bold">Doctor Create Form </h3>
		
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
						@error('name')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror

						<label for="degrees">Degree:</label>
						<select class="multipart form-control" name="degrees[]" multiple>
							
							@foreach($degree as $degree)
						    <option value="{{$degree->id}}">{{$degree->degree}}</option>
						    @endforeach
						    
						</select>
						
						<label for="speciality">Speciality:</label>
						<select class="form-control @error('speciality') is-invalid @enderror" name="speciality">
							@foreach($specializations as $speciality)
							<option value="{{$speciality->id}}" >{{$speciality->speciality}}</option>
							@endforeach
						</select>
						@error('speciality')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror <br>

						<label>DoctorFee:</label>
						<input type="text" name="doctorFee" class="form-control @error('doctorFee') is-invalid @enderror">
						@error('doctorFee')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror <br>

						<label>Phone:</label>
						<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror">
						@error('phone')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror <br>

						<label>Email:</label>
						<input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
						@error('email')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror <br>

						<label>Password:</label>
						<input type="text" name="password" class="form-control @error('password') is-invalid @enderror">
						@error('password')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror <br>

						<label>Address:</label>
						<textarea name="address" class="form-control @error('address') is-invalid @enderror" name="address"></textarea>
						@error('address')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror <br>

						<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
					</div>
				</div>
			</div>
			</div>
		</form>
	
</div>
</div>
@endsection