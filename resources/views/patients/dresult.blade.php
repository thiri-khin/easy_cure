@extends('backend_template')
@section('content')
<div class="container-fluid">
	<div class="row my-3">
		<div class="col-6">
			<h2>Patients List</h2>
		</div>
		<div class="col-6">
			<a href="{{route('patients.create')}}" class="btn btn-primary float-right">Add New Patients</a>
		</div>
	</div>
	
	<div class="card-body">
		<div class="table-responsive">
			<table class="table" id="dataTable" width="100%" cellspacing="0">
			     <thead class="bg-dark">
				<tr class="text-light">
					<th>No</th>
					<th>Id</th>
					<th>PatientName</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Remark</th>
					<th>Cured_date</th>
					<th>Gender</th>
					<th>Age</th>
					<th>Actions</th>
				</tr>
			     </thead>
			     <tbody>
				@php
				$i=1;
				@endphp
				@foreach($patients as $patient)
				<tr>
					<td>{{$i++}}</td>
					
					<td>{{$patient->id}}</td>
				    <td>{{$patient->name}}</td>	
					<td>{{$patient->phone}}</td>	
					<td>{{$patient->address}}</td>	
					<td>{{$patient->remark}}</td>	
					<td>{{$patient->cured_date}}</td>
					<td>{{$patient->gender}}</td>
					<td>{{$patient->age}}</td>
					<td><button class="btn btn-info btnDetail">Detail</button></td>
					<td>
						<a href="{{route('patients.edit',$patient->id)}}" class="btn btn-warning">Edit</a>
						<form method="post" action="{{route('patients.destroy',$patient->id)}}">
							@csrf
							@method('DELETE')
							<input type="submit" class="btn btn-danger" value="Delete">
						</form>
					</td>
				</tr>
				@endforeach
			     </tbody>
	        </table>
	    </div>
	</div>    
@endsection