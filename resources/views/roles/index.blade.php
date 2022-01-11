@extends('backend_template')
@section('content')


<div class="container-fluid">
	<div class="row my-3">
		<div class="col">
			<h2>Role List</h2>
			<a href="{{route('roles.create')}}" class="btn btn-primary float-right">Add New Role</a>
		</div>
	</div>
	<div class="row my-3">
		<div class="col">
			<table class="table table-responsive" id="dataTable">
				<thead class="table-dark">
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@php
					$i=1;
					@endphp
					@foreach($roles as $role)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$role->name}}<td>
						<td>
							<a href="{{route('roles.edit',$role->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
							<form method="post" action="{{route('roles.destroy',$role->id)}}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
						@endforeach
				</tbody>
			</table>
				
		</div>
	</div>
</div>
@endsection


