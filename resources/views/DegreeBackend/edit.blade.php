@extends('backend_template')
@section('content')

<div class="card shadow m-4">
	<div class="card-body">
		<form class="form-group" action="{{route('DegreeBackend.update',$degree->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="container-fluid">
				<h4 class="text-primary font-weight-bold">Edit Degree Form</h4>
				<div class="row">
					<div class="col">
						<label>Degree:</label>
						<input type="text" name="degree" placeholder="Enter Degree...." class="form-control" value="{{$degree->degree}}">
						<br>
						<button type="submit" class="btn btn-primary mt-3"><i class="fas fa-user-edit"></i> Update</button>
					</div>
				</div>
		</form>
	</div>
</div>	


@endsection