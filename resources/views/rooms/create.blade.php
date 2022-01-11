@extends('backend_template')
@section('content')
<div class="card shadow mx-3 my-3">
	<div class="card-body">
	<form method="post" enctype="multipart/form-data" action="{{route('rooms.store')}}" class="form-group">		
			@csrf
		<div class="container-fluid">
			<h4 class="text-primary font-weight-bold">Room Create Form</h4>
			<div class="row">
				<div class="col-md-12">
					<label>Room Type:</label>

					<input type="text" name="type" class="form-control @error('type') is-invalid @enderror" placeholder="Enter Room Type">

					@error('type')
    				<div class="alert alert-danger">{{$message}}</div>
					@enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">				
					<label>Room No:</label>
					<input type="text" name="room_no" class="form-control @error('rom_no') is-invalid @enderror" placeholder="Enter Room Number">

					@error('room_no')
    				<div class="alert alert-danger">{{$message}}</div>
					@enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>Price:</label>
					<input type="text" name="price" class="form-control  @error('price') is-invalid @enderror" placeholder="Enter Room Price">

					@error('price')
    				<div class="alert alert-danger">{{$message}}</div>
					@enderror
					<button type="submit" class="btn btn-primary my-3"><i class="fas fa-save"></i> Save</button>
				</div>
			</div>
		</div>
	</form>
</div>
</div>
@endsection



