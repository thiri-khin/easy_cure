@extends('backend_template')
@section('content')
<div class="card shadow m-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-list-ul"></i> Contact Message List
    </div>
    <div class="card-body">
    	<div class="table-responsive">
		    <table class="table" id="dataTable" width="100%" cellspacing="0">
		        <thead class="bg-secondary text-light">
					<tr class="text-light">
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Message</th>
						<th>Actions</th>

					</tr>
				</thead>
				<tbody>
					@php
						$i=1;
						@endphp
					@foreach($contacts as $contact)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$contact->name}}</td>
						<td>{{$contact->email}}</td>
						<td>{{$contact->phone}}</td>
						<td>{{$contact->message}}</td>
						<td>
							<form method="post" action="{{route('contactbackend.destroy',$contact->id)}}">
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
@endsection