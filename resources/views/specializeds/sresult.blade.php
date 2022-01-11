@extends('frontend.about')
@section('dresult')
<div class="container">
	<div class="row my-3">
		<div class="col">
			<h3 class="text-dark font-weight-bold">Your Doctors List</h3>
		</div>
	</div>
	
	<table class="table">
		<thead style="background-color: #03198c;">
			<tr class="text-light">
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Degree</th>
				<th>Speciality</th>
				<th>Phone</th>
				<th>DoctorFee</th>
				<th>Address</th>
				<th colspan="3">Actions</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			@foreach($doctorss as $doctor)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$doctor->name}}</td>
			    <td>{{$doctor->email}}</td>	
				<td>{{$doctor->degree->degree}}</td>	
				<td>{{$doctor->speciality->speciality}}</td>	
				<td>{{$doctor->phone}}</td>	
				<td>{{$doctor->doctorfee}}</td>
				<td>{{$doctor->address}}</td>
				<td><button class="btn btn-info btnDetail"> <i class="fas fa-info-circle"></i>Detail</button></td>
				<td><a href="" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a></td>
				<td>
					<form method="post" action="">
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
@endsection