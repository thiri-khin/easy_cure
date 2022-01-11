@extends('backend_template')
@section('content')
<div class="card shadow mx-3 my-3">
	<div class="card shadow">
       <div class="container-fluid">
       		<div class="card-header">
				<div class="row my-3">
					<div class="col-6">
						<h4 class="text-primary font-weight-bold"><i class="fas fa-list-ul"></i> Period Patients List</h4>
					</div>
			    </div>
			</div>
	
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="dataTable" width="100%" cellspacing="0">
					    <thead class="bg-dark">
					    	<tr class="text-light">
								<th>No</th>
								<th>Curing PatientName</th>
								<th>Room NO</th>
								<th>BloodType</th>
								<th>Address</th>
								<th>Remark</th>
								<th>Gurdian</th>
								<th>Start_date</th>
								<th>End_date</th>
								<th>Gender</th>
								<th>Age</th>
								<th>Actions</th>
					    	</tr>
				        </thead>
				    	<tbody>
							@php
							$i=1;
							@endphp
							@foreach($cpatients as $cpatient)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$cpatient->patient->name}}</td>
							    <td>{{$cpatient->room->room_no}}</td>	
								<td>{{$cpatient->blood_type}}</td>
								<td>{{$cpatient->patient->address}}</td>
								<td>{{$cpatient->patient->remark}}</td>	
								<td>{{$cpatient->gurdian}}</td>		
								<td>{{$cpatient->start_date}}</td>
								<td>{{$cpatient->end_date}}</td>
								<td>{{$cpatient->patient->gender}}</td>
								<td>{{$cpatient->patient->age}}</td>
								<td>
								<a href="{{route('curingpatient.edit',$cpatient->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
								
									<form method="post" action="{{route('curingpatient.destroy',$cpatient->id)}}">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i> Delete</button>
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
@endsection