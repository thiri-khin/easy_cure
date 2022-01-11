@extends('backend_template')
@section('content')

<div class="card shadow m-4">
	<div class="card-body">
		<form class="form-group" action="{{route('SpecializationBackend.update',$speciality->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="container-fluid">
				<h4 class="text-primary font-weight-bold">Edit Speciality Form</h4>
		
				<input type="text" value="{{$speciality->speciality}}" name="speciality" class="form-control @error('speciality') is-invalid @enderror">
				@error('speciality')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror

				<label>Profile:</label>
				<input type="file" name="profile" class="form-control"><img src="{{asset($speciality->profile)}}" class="img-fluid">
				<input type="hidden" name="oldprofile" value="{{$speciality->profile}}"><br>
				@error('profile')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				
				<br>
				<button type="submit" class="btn btn-outline-primary my-3">Update</button>
		</form>
	</div>
</div>


@endsection