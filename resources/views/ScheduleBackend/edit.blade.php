@extends('backend_template')
@section('content')

<div class="card shadow m-4">
	<div class="card-body">
		<form class="form-group" action="{{route('ScheduleBackend.update',$schedule->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="container-fluid">
				<h4 class="text-primary font-weight-bold">Schedule Edit Form Form</h4>
			<div class="row">
				<div class="col">
					
						<label for="doctor">Doctor:</label>
						<select class="form-control @error('doctor') is-invalid @enderror" name="doctor" >
							<option value="{{$schedule->user->id}}" >{{$schedule->user->name}}</option>
						</select>
						@error('doctor')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror

						<label for="day">Day:</label>
						<input type="text" class="form-control @error('day') is-invalid @enderror" name="day" value="{{$schedule->day}}">
						@error('day')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror

						<label>Start Time:</label>
						<input type="text" name="start_time" class="form-control @error('start_time') is-invalid @enderror" value="{{$schedule->start_time}}">
						@error('start_time')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror

						<label>End Time:</label>
						<input type="text" name="end_time" class="form-control @error('end_time') is-invalid @enderror" value="{{$schedule->end_time}}">
						@error('end_time')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror

						<button type="submit" class="btn btn-primary mt-3"><i class="fas fa-user-edit"></i> Update</button>
					
				</div>
			</div>
		</div>
	</form>
</div>
</div>

@endsection