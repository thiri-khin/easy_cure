@extends('backend_template')
@section('content')

<div class="card shadow m-4">
	<div class="card-header py-3">
	<div class="container-fluid">
		<div class="row my-3">
			<div class="col-6">
				<h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-list-ul"></i> Degree List</h4>

			</div>
			<div class="col-6">
				<a href="{{route('DegreeBackend.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus-square"></i> Add New Degree</a>
			</div>
		</div>
	
		<table class="table" id="dataTable">
			<thead class="bg-dark">
				<tr class="text-light">
					<th>No</th>
					<th>Degree</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@php
				$i=1;
				@endphp
				@foreach($degrees as $degree)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$degree->degree}}</td>
					<td>
						<a href="{{route('DegreeBackend.edit',$degree->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
						<form method="post" action="{{route('DegreeBackend.destroy',$degree->id)}}">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger p-2"><i class="fas fa-minus-circle"></i> Delete</button>
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