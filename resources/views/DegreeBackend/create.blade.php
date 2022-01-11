@extends('backend_template')
@section('content')

<div class="card shadow mx-3 my-3">
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{route('DegreeBackend.store')}}">
			@csrf
			<div class="container-fluid">
				<h4 class="font-weight-bold text-primary">Degree Create Form</h4>
				
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label>Degree:</label>
						<input type="text" name="degree" class="form-control @error('degree') is-invalid @enderror">
						@error('degree')
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