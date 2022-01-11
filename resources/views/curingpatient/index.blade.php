@extends('backend_template')
@section('content')
<div class="card shadow m-4">
	<div class="card-header py-3">
		<h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-list-ul"></i> Curing Patient List</h4>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table" id="dataTable" width="100%" cellspacing="0">
	  			<thead class="bg-secondary text-light">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Remark</th>
						<th>Blood Type</th>
						<th>Gurdian</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Room Type</th>
						<th>Room No</th>
						<th>Room Price</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th style="padding-left: 70px; padding-right: 70px;">Actions</th>
					</tr>
				</thead>
				<tbody>
					
					@php
					$i=1;
					@endphp
					@foreach($patients as $patient)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$patient->patient->name}}</td>
						<td>{{$patient->patient->phone}}</td>
						<td>{{$patient->patient->address}}</td>
						<td>{{$patient->patient->remark}}</td>
						<td>{{$patient->blood_type}}</td>
						<td>{{$patient->gurdian}}</td>
						<td>{{$patient->patient->age}}</td>
						<td>{{$patient->patient->gender}}</td>
						<td>{{$patient->room->type}}</td>
						<td>{{$patient->room->room_no}}</td>
						<td>{{$patient->room->price}}</td>
						<td>{{$patient->start_date}}</td>
						<td>{{$patient->end_date}}</td>
						<td>
							<a data-toggle="modal" data-id="{{$patient->id}}" data-name="{{$patient->patient->name}}" data-phone="{{$patient->patient->phone}}" data-address="{{$patient->patient->address}}" data-remark="{{$patient->patient->remark}}" data-blood="{{$patient->blood_type}}" data-gurdian="{{$patient->gurdian}}" data-age="{{$patient->patient->age}}" data-gender="{{$patient->patient->gender}}" data-roomtype="{{$patient->room->type}}" data-roomno="{{$patient->room->room_no}}" data-price="{{$patient->room->price}}" data-startdate="{{$patient->start_date}}" data-enddate="{{$patient->end_date}}" class="btn btn-info btnDetail text-white"><i class="fas fa-info-circle"></i>Detail</a>
							<a href="{{route('curingpatient.edit',$patient->id)}}" class="btn btn-primary p-2"><i class="fas fa-edit"></i>Edit</a>
							<form method="post" action="{{route('curingpatient.destroy',$patient->id)}}">
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