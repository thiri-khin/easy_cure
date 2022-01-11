@extends('backend_template')
@section('content')



<form method="post" enctype="multipart/form-data" action="{{route('roles.store')}}" class="form-group">		
	@csrf
	<div class="container-fluid">
		<h2>Role List</h2>
		<div class="row">
			<div class="col-md-12">
				<label>Role Name:</label>

				<input type="text" name="type" class="form-control @error('type') is-invalid @enderror">

				@error('type')
				<div class="alert alert-danger">{{$message}}</div>
				@enderror
			</div>
		</div>
		<div class="form-group">

			<button type="submit" name="btnsubmit" class="btn btn-primary">Save</button>
		</div>
	</div>
</form>
@endsection
