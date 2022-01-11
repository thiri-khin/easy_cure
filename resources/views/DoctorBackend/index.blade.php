@extends('backend_template')
@section('content')
<div class="card shadow m-4">
	<div class="card-header">
		<div class="container-fluid">
			<div class="row my-3">
				<div class="col-6">
					<h3 class="m-0 font-weight-bold text-primary"><i class="fas fa-list-ul"></i> Doctor List</h3>
				</div>
				<div class="col-6">
					<a href="{{route('DoctorBackend.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus-square"></i> Add New Doctor</a>
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
							<th>Name</th>
							<th>Speciality</th>
							<th>DoctorFee</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Address</th>
							<th style="padding-right: 70px; padding-left: 70PX;">Actions</th>
						</tr>
					</thead>
					<tbody>
						@php
						$i=1;
						@endphp
						@foreach($doctors as $doctor)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$doctor->user->name}}</td>
		                    <td>{{$doctor->speciality->speciality}}</td>
							<td>{{$doctor->doctorfee}}</td>
							<td>{{$doctor->phone}}</td>
							<td>{{$doctor->user->email}}</td>
							<td>{{$doctor->address}}</td>
							<td>
								<a data-toggle="modal" data-id="{{$doctor->id}}" data-name="{{$doctor->user->name}}" data-phone="{{$doctor->phone}}" data-address="{{$doctor->address}}" data-speciality="{{$doctor->speciality->speciality}}" data-doctorfee="{{$doctor->doctorfee}}" data-email="{{$doctor->user->email}}" class="btn btn-info btnDetail text-white"><i class="fas fa-info-circle"></i> Detail</a>
								<a href="{{route('DoctorBackend.edit',$doctor->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
								<form method="post" action="{{route('DoctorBackend.destroy',$doctor->id)}}">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger p-2"><i class="fas fa-minus-circle"></i>  Delete</button>
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
			var email = $(this).data('email');
			var speciality = $(this).data('speciality');
			var doctorfee = $(this).data('doctorfee');
	        $('#exampleModalLabel').html(name);
	        $('#modalBody').html("Phone no: "+phone+"<br>Address: "+address+"<br>Email: "+email+"<br>Speciality: "+speciality+"<br>Doctor Fee: "+doctorfee);
			$('#detailModel').modal('show');
		});
	});
</script>
@endsection