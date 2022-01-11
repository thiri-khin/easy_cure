@extends('backend_template')
@section('content')

<div class="card shadow m-4">
	<div class="card-header py-3">
		<div class="container-fluid">
			<div class="row my-3">
				<div class="col-6">
					<h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-list-ul"></i> Specialization List</h4>
				</div>
				<div class="col-6">
					<a href="{{route('SpecializationBackend.create')}}" class="btn btn-primary float-right"><i class="fas fa-user-plus"></i> Add New Specialization</a>
				</div>
			</div>
		</div>	
	</div>

	<div class="card-body">
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table" id="dataTable" width="100%" cellspacing="0">
		  			<thead class="bg-secondary text-light">
						<tr>
							<th>No</th>
						    <th>Speciality</th>
						    <th>Profile</th>
						    <th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@php
						$i=1;
						@endphp
						@foreach($specializations as $speciality)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$speciality->speciality}}</td>
							<td>{{$speciality->profile}}</td>
							<td>
								<a href="{{route('SpecializationBackend.edit',$speciality->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
								<form method="post" action="{{route('SpecializationBackend.destroy',$speciality->id)}}">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger p-2"><i class="fas fa-minus-circle"></i>Delete</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>	
	
@endsection