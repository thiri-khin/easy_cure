@extends('frontend_template')
@section('content')
<div class="container" style="margin-top: 150px;">
	<form class="form-group" action="{{route('appointmentfrontend.store')}}" method="post">
		@csrf
		<div class="container-fluid">
			<h2 class="text-dark font-weight-bold">Appointment Form</h2>
			<div class="row">
				<div class="col">
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name">
					@error('name')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="phone">Phone:</label>
					<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">
					@error('phone')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="address">Address:</label>
					<textarea name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter your address"></textarea>
					@error('address')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="date">Appointment Date:</label>
					<input type="date" name="date" class="form-control @error('date') is-invalid @enderror" placeholder="Enter appointment date">
					@error('date')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="situation">Situation:</label>
					<input type="text" name="situation" class="form-control @error('situation') is-invalid @enderror" placeholder="Enter your situation">
					@error('situation')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<form action="{{route('stodoctor.store')}}" method="post" class="form-group">
						@csrf
						<label for="speciality">Speciality:</label>
						<button class="form-control btn btn-block" type="submit p-0">
							<select class="special form-control @error('speciality') is-invalid @enderror m-0" name="speciality">
								@foreach($specialities as $specialityname)
								<option value="{{$specialityname->id}}">{{$specialityname->speciality}}</option>
								@endforeach
							</select>
						</button>
						@error('speciality')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</form>

					<form action="{{route('stodoctor.store')}}" method="post" class="form-group">
						@csrf
						<label for="speciality">Speciality:</label>
						<button class="form-control btn btn-block" type="submit p-0">
							<select class="special form-control @error('speciality') is-invalid @enderror m-0" name="speciality">
								@foreach($specialities as $specialityname)
								<option value="{{$specialityname->id}}">{{$specialityname->speciality}}</option>
								@endforeach
							</select>
						</button>
						@error('speciality')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</form>

					<button class="btn btn-info mt-3" type="submit">Make Appointment</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection