@extends('backend_template')
@section('content')
<div class="container-fluid">
	<h2>Room Form</h2>
	<div class="container">
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<div class="row my-5">
			<div class="col-md-12">

				<form method="post" 
				action="{{route('rooms.update',$room->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label>Room No:</label>
					<input type="text" name="room_no" class="form-control" value="{{$room->room_no}}">
				</div>
				<div class="form-group">
					<label>Type:</label>
					<input type="text" name="type" class="form-control" value="{{$room->type}}">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" name="price" class="form-control" value="{{$room->price}}">
				</div>

				<div class="form-group"	>			
					<button type="submit" name="btnsubmit" class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
@endsection
