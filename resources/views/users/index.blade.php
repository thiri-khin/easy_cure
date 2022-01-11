@extends('backend_template')
@section('content')
	<div class="container-fluid">
		<div class="row my-3">
			<div class="col-lg-12">
				<h2 class="float-left">User List</h2>
				<a href="{{route('users.create')}}" class="btn btn-success float-right">Add New User</a>
			</div>
		</div>
		<div class="row my-3">
			<div class="col">
				<table class="table">
					<thead class="table-dark">
						<tr>
							<th>Name</th>
							<th>Email</th>
						    <th colspan="2">Actions</th>
					    </tr>
				    </thead>
				    <tbody>
						@php
						$i=1;
						@endphp
						@foreach($users as $user)
						<tr>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>
							<button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Detail</button>
							</td>
							<td>
								<form method="post" action="{{route('users.destroy',$user->id)}}">
								@csrf
								@method('DELETE')
								<input type="submit" class="btn btn-danger"value="Delete">
								</form>
							</td>
						</tr>
		            	@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

