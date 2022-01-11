@extends('backend_template')
@section('content')
<div class="container-fluid">
		<h2>Role Form</h2>
		<div class="container">
			<div class="row my-5">
				<div class="col-md-12">

					<form method="post" 
					action="{{route('roles.update',$roles->id)}}" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label>Role Name:</label>
							<input type="text" name="rolename" class="form-control" value="{{$roles->name}}">
						</div>
						
						<div class="form-group"	>			
						<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection