@extends('backend_template')
@section('content')

<div class="card shadow mx-3 my-3">
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{route('SpecializationBackend.store')}}">
			@csrf
		<div class="container-fluid">
			<h4 class="text-primary font-weight-bold">Specialization Create Form</h4>
					@csrf
					
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="speciality">Speciality:</label>
							<input type="text" name="speciality" class="form-control @error('speciality') is-invalid @enderror">
							@error('speciality')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<label for="profile">Profile:</label>
							<input type="file" name="profile" class="form-control @error('profile') is-invalid @enderror">
							@error('profile')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<button class="btn btn-primary mt-3" type="submit"><i class="fas fa-save"></i> Save</button>
						</div>
					</div>
				</div>

		</div>
		</form>
			
			
	</div>
</div>


@endsection