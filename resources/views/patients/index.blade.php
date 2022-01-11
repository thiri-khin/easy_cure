@extends('backend_template')
@section('content')

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hospital</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Not Hospital</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	<div class="card shadow m-4">
		<div class="card-header py-3">
			<h4 class="text-primary font-weight-bold"><i class="fas fa-list-ul"></i> Met Patients List</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table" id="dataTable" width="100%" cellspacing="0">
				    <thead class="bg-dark">
					    <tr class="text-light">
							<th>No</th>
							<th class="px-0">Name</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Remark</th>
							<th>Cured_date</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Hospital</th>
							<th style="padding-right: 100px; padding-left: 100PX;">Actions</th>
					    </tr>
				     </thead>
				    <tbody>
							@php
							$i=1;
							@endphp
							@foreach($hpatients as $patient)
							<tr>
								<td>{{$i++}}</td>
							    <td>{{$patient->name}}</td>	
								<td>{{$patient->phone}}</td>	
								<td>{{$patient->address}}</td>	
								<td>{{$patient->remark}}</td>	
								<td>{{$patient->cured_date}}</td>
								<td>{{$patient->gender}}</td>
								<td>{{$patient->age}}</td>
								<td>{{$patient->patient_hospital}}</td>
								<td>
									<a href="{{route('curingpatient.edit',$patient->id)}}" class="btn btn-info"><small><i class="far fa-hospital"></i>Hospital</small></a>
									<a data-toggle="modal" data-id="{{$patient->id}}" data-name="{{$patient->name}}" data-phone="{{$patient->phone}}" data-address="{{$patient->address}}" data-remark="{{$patient->remark}}" data-date="{{$patient->cured_date}}" data-gender="{{$patient->gender}}" data-age="{{$patient->age}}" data-hospital="{{$patient->patient_hospital}}" class="btn btn-info btnDetail text-white"><small><i class="fas fa-info-circle"></i>Detail</small></a>
									<a href="{{route('patients.edit',$patient->id)}}" class="btn btn-warning"><small><i class="fas fa-edit"></i> Edit</small></a>
									<form method="post" action="{{route('patients.destroy',$patient->id)}}">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger" type="submit"><small><i class="fas fa-trash-alt"></i>Delete</small></button>
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
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  	<div class="card shadow m-4">
		<div class="card-header py-3">
			<h4 class="text-primary font-weight-bold"><i class="fas fa-list-ul"></i> Met Patients List</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table" id="dataTable" width="100%" cellspacing="0">
				    <thead class="bg-dark">
					    <tr class="text-light">
							<th>No</th>
							<th>PatientName</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Remark</th>
							<th>Cured_date</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Hospital</th>
							<th style="padding-right: 70px; padding-left: 70PX;">Actions</th>
					    </tr>
				     </thead>
				    <tbody>
							@php
							$i=1;
							@endphp
							@foreach($npatients as $patient)
							<tr>
								<td>{{$i++}}</td>
							    <td>{{$patient->name}}</td>
								<td>{{$patient->phone}}</td>	
								<td>{{$patient->address}}</td>	
								<td>{{$patient->remark}}</td>	
								<td>{{$patient->cured_date}}</td>
								<td>{{$patient->gender}}</td>
								<td>{{$patient->age}}</td>
								<td>{{$patient->patient_hospital}}</td>
								<td>
									<a data-toggle="modal" data-id="{{$patient->id}}" data-name="{{$patient->name}}" data-phone="{{$patient->phone}}" data-address="{{$patient->address}}" data-remark="{{$patient->remark}}" data-date="{{$patient->cured_date}}" data-gender="{{$patient->gender}}" data-age="{{$patient->age}}" data-hospital="{{$patient->patient_hospital}}" class="btn btn-info btnDetail text-white"><i class="fas fa-info-circle"></i> Detail</a>
									<a href="{{route('patients.edit',$patient->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
									<form method="post" action="{{route('patients.destroy',$patient->id)}}">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
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

<div class="modal hide" id="detailModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p id="modalBody" class="text-primary"></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function () {
		$('.btnDetail').on('click',function(e){
			var name = $(this).data('name');
			var phone = $(this).data('phone');
			var address = $(this).data('address');
			var remark = $(this).data('remark');
			var date = $(this).data('date');
			var gender = $(this).data('gender');
			var age = $(this).data('age');
			var hospital = $(this).data('hospital');
	        $('#exampleModalLabel').html(name);
	        $('#modalBody').html("Phone no: "+phone+"<br>Address: "+address+"<br>Remark: "+remark+"<br>Date: "+date+"<br>Gender: "+gender+"<br>Age: "+age+"<br>Hospital: "+hospital);
			$('#detailModel').modal('show');
		});
	});
</script>
@endsection