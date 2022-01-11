@extends('backend_template')
@section('content')
<div class="card shadow mx-3 my-3">
	<div class="card-body">
		<form class="form-group" action="{{route('curingpatient.store')}}" method="post">
			@csrf
			<div class="container-fluid">
				<h4 class="text-primary font-weight-bold">Curing Patient Form</h4>
				<div class="row">
					<div class="col">
						<label for="patientid">Patient ID:</label>
						<input type="text" name="patientid" class="form-control @error('patientid') is-invalid @enderror">
						@error('patientid')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="roomid">Room ID:</label>
						<input type="text" name="roomid" class="form-control @error('roomid') is-invalid @enderror">
						@error('roomid')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="blood">Blood Type:</label>
						<input type="text" name="blood" class="form-control @error('blood') is-invalid @enderror">
						@error('blood')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="gurdian">Gurdian:</label>
						<input type="text" name="gurdian" class="form-control @error('gurdian') is-invalid @enderror">
						@error('gurdian')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="startdate">Start Date:</label>
						<input type="date" name="startdate" class="form-control @error('startdate') is-invalid @enderror">
						@error('startdate')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<button class="btn btn-primary mt-3" type="submit"><i class="fas fa-save"></i> Save</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection