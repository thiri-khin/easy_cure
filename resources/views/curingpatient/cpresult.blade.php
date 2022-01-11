@extends('backend_template')
@section('content')
<div class="card shadow mx-3 my-3">
	<div class="card-body">
       <div class="container-fluid">
	<div class="row my-3">
		<div class="col-6">
			<h4 class="text-primary font-weight-bold"><i class="fas fa-list-ul"></i> Curing Patients List</h4>
		</div>
		
	</div>
	<div class="table-responsive">
	<table class="table" id="dataTable">
		<thead class="bg-dark">
			<tr class="text-light">
				<th>No</th>
				<th>Curing PatientName</th>
				<th>Room NO</th>
				<th>BloodType</th>
				<th>Gurdian</th>
				<th>Gender</th>
				<th>Age</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th style="padding-left: 70px; padding-right: 70px;">Actions</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			@foreach($patients as $cpatient)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$cpatient->name}}</td>
			    <td>{{$cpatient->room_no}}</td>	
				<td>{{$cpatient->blood_type}}</td>	
				<td>{{$cpatient->gurdian}}</td>	
				<td>{{$cpatient->gender}}</td>
				<td>{{$cpatient->age}}</td>	
				<td>{{$cpatient->start_date}}</td>
				<td>{{$cpatient->end_date}}</td>
                <td>
				<a data-toggle="modal" data-id="{{$cpatient->id}}"
				 data-name="{{$cpatient->name}}" data-phone="{{$cpatient->phone}}" data-address="{{$cpatient->address}}" data-remark="{{$cpatient->remark}}" data-blood="{{$cpatient->blood_type}}" data-gurdian="{{$cpatient->gurdian}}" data-age="{{$cpatient->age}}" data-gender="{{$cpatient->gender}}" data-roomtype="{{$cpatient->type}}" data-roomno="{{$cpatient->room_no}}" data-price="{{$cpatient->price}}" data-startdate="{{$cpatient->start_date}}" data-enddate="{{$cpatient->end_date}}" class="btn btn-info btnDetail text-white"> <i class="fas fa-info-circle"></i> Detail</a>
				 <a href="{{route('curingpatient.edit',$cpatient->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
					<form method="post" action="{{route('curingpatient.destroy',$cpatient->id)}}">
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
			var blood = $(this).data('blood');
			var gurdian = $(this).data('gurdian');
			var gender = $(this).data('gender');
			var age = $(this).data('age');
			var roomtype = $(this).data('roomtype');
			var roomno = $(this).data('roomno');
			var price = $(this).data('price');
			var startdate = $(this).data('startdate');
			var enddate = $(this).data('enddate');
	        $('#exampleModalLabel').html(name);
	        $('#modalBody').html("Phone no: "+phone+"<br>Address: "+address+"<br>Remark: "+remark+"<br>Blood: "+blood+"<br>Gurdian: "+gurdian+"<br>Gender: "+gender+"<br>Age: "+age+"<br>Room Type: "+roomtype+"<br>Room No: "+roomno+"<br>Room Price: "+price+"<br>Start Date: "+startdate+"<br>End Date: "+enddate);
			$('#detailModel').modal('show');
		});
	});
</script>
@endsection