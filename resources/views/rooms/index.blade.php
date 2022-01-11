@extends('backend_template')
@section('content')
<div class="container-fluid">
	<div class="card shadow">
		<div class="card-header">
			<div class="container-fluid">
				<div class="row my-3">
					<div class="col-6">
						<h4 class="text-primary font-weight-bold"><i class="fas fa-list-ul"></i> Room List</h4>
					</div>
					<div class="col-6">
						<a href="{{route('rooms.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus-square"></i> Add New Room</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="container-fluid">
				<div class="row my-3">
					<div class="col">
						<table class="table" id="dataTable">
							<thead class="table-dark">
								<tr>
									<th>No.</th>
									<th>Type</th>
									<th>Room No.</th>
									<th>Price</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@php
								$i=1;
								@endphp
								@foreach($rooms as $room)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$room->type}}</td>
									<td>{{$room->room_no}}</td>
									<td>{{$room->price}}</td>
									<td>
										<a href="{{route('rooms.edit',$room->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
										<form method="post" action="{{route('rooms.destroy',$room->id)}}">
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
		</div>
	</div>
</div>

@endsection
		


