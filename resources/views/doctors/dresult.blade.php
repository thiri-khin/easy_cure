@extends('frontend.about')
@section('dresult')
<div class="container">
	<div class="row my-3">
		<div class="col">
			<h3 class="text-dark font-weight-bold">Your Doctors List</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-lg-12">
			<table class="table">
				<thead style="background-color: #03198c;">
					<tr class="text-light">
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						
						<th>Speciality</th>
						<th>Phone</th>
						<th>DoctorFee</th>
						<th>Address</th>
						
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
						
						<td>{{$doctor->speciality}}</td>	
						<td>{{$doctor->phone}}</td>	
						<td>{{$doctor->doctorfee}}</td>
						<td>{{$doctor->address}}</td>
						
					</tr>
					@endforeach
				
			
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection