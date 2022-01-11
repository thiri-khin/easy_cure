@extends('backend_template')
@section('content')

<!-- DataTales Example -->
<div class="card shadow m-4">
    <div class="card-header py-3">
    	<h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-list-ul"></i> Appointment List</h4>
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
				<th>Situation</th>
				<th>Doctor</th>
				<th>Day</th>
				<th>From</th>
				<th>To</th>
				<th style="padding-left: 70px; padding-right: 70px;">Actions</th>
			</tr>
          </thead>
          <tbody>
          	@php
			$i=1;
			@endphp
			@foreach($appointments as $appointment)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$appointment->name}}</td>
				<td>{{$appointment->phone}}</td>
				<td>{{$appointment->address}}</td>
				<td>{{$appointment->patient_situation}}</td>
				<td>{{$appointment->schedule->user->name}}</td>
				<td>{{$appointment->schedule->day}}</td>
				<td>{{$appointment->schedule->start_time}}</td>
				<td>{{$appointment->schedule->end_time}}</td>
				<td>
					<a href="{{route('appointmentbackend.edit',$appointment->id)}}" class="btn btn-primary p-2"><i class="fas fa-edit"></i> Cure</a>
					<a data-toggle="modal" data-id="{{$appointment->id}}" data-name="{{$appointment->name}}" data-phone="{{$appointment->phone}}" data-address="{{$appointment->address}}" data-situation="{{$appointment->patient_situation}}" data-doctor="{{$appointment->schedule->user->name}}" data-day="{{$appointment->schedule->day}}" data-starttime="{{$appointment->schedule->start_time}}" data-endtime="{{$appointment->schedule->end_time}}" class="btn btn-info btnDetail text-white"><i class="fas fa-info-circle"></i> Detail</a>
					<form method="post" action="{{route('appointmentbackend.destroy',$appointment->id)}}">
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
			var situation = $(this).data('situation');
			var doctor = $(this).data('doctor');
			var day = $(this).data('day');
			var starttime = $(this).data('starttime');
			var endtime = $(this).data('endtime');
	        $('#exampleModalLabel').html(name);
	        $('#modalBody').html("Phone no: "+phone+"<br>Address: "+address+"<br>Patient Situation: "+situation+"<br>Doctor Name: "+doctor+"<br>Appointment Date: "+day+" "+starttime+" - "+endtime);
			$('#detailModel').modal('show');
		});
	});
</script>
@endsection