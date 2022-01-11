@extends('backend_template')
@section('content')

<div class="card shadow m-4">
	<div class="card-header py-3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6">
					<h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-list-ul"></i> Schedule List</h4>
				</div>
				<div class="col-6">
					<a href="{{route('ScheduleBackend.create')}}" class="btn btn-primary float-right"><i class="fas fa-user-plus"></i> Add New Schedule</a>
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
							<th>Doctor</th>
							<th>Day</th>
							<th>Start Time</th>
							<th>End Time</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@php
						$i=1;
						@endphp
						@foreach($schedules as $schedule)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$schedule->user->name}}</td>
							<td>{{$schedule->day}}</td>
							<td>{{$schedule->start_time}}</td>
							<td>{{$schedule->end_time}}</td>
							<td>
								<a href="{{route('ScheduleBackend.edit',$schedule->id)}}" class="btn btn-warning"> <i class="fas fa-edit"></i> Edit</a>
								<form method="post" action="{{route('ScheduleBackend.destroy',$schedule->id)}}">
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