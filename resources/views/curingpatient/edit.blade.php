@extends('backend_template')
@section('content')
<div class="card shadow m-4">
	<div class="card-body">
		<form class="form-group" action="{{route('curingpatient.store')}}" method="post">
			@csrf
			<div class="container-fluid">
				<h4 class="text-primary font-weight-bold">Curing Patient Form</h4>
				<div class="row">
					<div class="col">
						<input type="hidden" name="pid" value="{{$patient->id}}">
						<label for="name">Patient Name:</label>
						<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$patient->name}}">
						@error('name')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="phone">Patient Phone:</label>
						<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$patient->phone}}">
						@error('phone')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="address">Patient Address:</label>
						<textarea name="address" class="form-control @error('address') is-invalid @enderror">{{$patient->address}}</textarea>
						@error('address')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="remark">Medical Remark:</label>
						<textarea name="remark" class="form-control @error('remark') is-invalid @enderror">{{$patient->remark}}</textarea>
						@error('remark')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="blood">Blood Type:</label>
						<input type="text" name="blood" class="form-control @error('blood') is-invalid @enderror">
						@error('blood')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="gurdian">Gurdian:</label>
						<input type="text" name="gurdian" class="form-control @error('gurdian') is-invalid @enderror">
						@error('gurdian')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="age">Patient Age:</label>
						<input type="text" name="age" class="form-control @error('age') is-invalid @enderror" value="{{$patient->age}}">
						@error('age')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label class="block">Gender</label>
						<div class="clip-radio radio-primary form-group">
							@if($patient->gender=='female')
							<input type="radio" id="rg-female" name="gender" value="female" checked="true">
							<label for="rg-female">
								Female
							</label>
							<input type="radio" id="rg-male" name="gender" value="male">
							<label for="rg-male">
								Male
							</label>
							@else
							<input type="radio" id="rg-female" name="gender" value="female">
							<label for="rg-female">
								Female
							</label>
							<input type="radio" id="rg-male" name="gender" value="male" checked="true">
							<label for="rg-male">
								Male
							</label>
							@endif
						</div>

						<label for="roomtype">Room Type:</label>
						<select class="text-secondary form-control @error('roomtype') is-invalid @enderror" name="roomtype" id="roomtype">
							<option value="">Select Room Type</option>
							@foreach($rooms as $room)
							<option value="{{$room->id}}">{{$room->type}}</option>
							@endforeach
						</select>
						@error('roomtype')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror

						<label for="roomno">Room No:</label>
						<select class="text-secondary form-control @error('roomno') is-invalid @enderror" name="roomno" id="roomno">
							<option value="">Select Room No</option>
						</select>
						@error('roomno')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror

						<label for="price">Room Price:</label>
						<input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price">
						@error('price')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror

						<label for="startdate">Start Date:</label>
						<input type="date" name="startdate" class="form-control @error('startdate') is-invalid @enderror">
						@error('startdate')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<label for="enddate">End Date:</label>
						<input type="date" name="enddate" class="form-control">
						<button type="submit" class="btn btn-primary mt-3"><i class="fas fa-user-edit"></i> Save</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
@section('script')
	<script type="text/javascript">
		 $(document).ready(function () { 
            $('#roomtype').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            console.log(cat_id);
            //ajax
            $.get('/ajax-subcat3?cat_id='+ cat_id,function(data){
                //success data
                console.log(data);
                $('#roomno').empty();
                $('#roomno').append('<option value ="">Select Room No</option>');
                $.each(data,function(create,subcatObj){
                    $('#roomno').append('<option value ="'+subcatObj.id+'">'+subcatObj.room_no+'</option>');
                });
            });
        	});
            $('#roomno').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            console.log(cat_id);
            //ajax
            $.get('/ajax-subcat4?cat_id='+ cat_id,function(data){
                //success data
                console.log(data);
                $('#price').empty();
                $.each(data,function(create,subcatObj){
                    $('#price').val(subcatObj.price);
                });
            });
        	});
    	});
	</script>
	@endsection