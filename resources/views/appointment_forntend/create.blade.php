@extends('frontend_template')
@section('content')
<div class="container" style="margin-top: 150px;">
	<form class="form-group" action="{{route('appointmentfrontend.store')}}" method="post">
		@csrf
		<div class="container-fluid">
			<h2 class="text-dark font-weight-bold">Appointment Form</h2>
			<div class="row">
				<div class="col">

					<label for="speciality">Speciality:</label>
					<select class="text-secondary form-control @error('speciality') is-invalid @enderror" name="speciality" id="speciality" data-dependent="doctor">
						<option value="">Select Speciality</option>
						@foreach($specialities as $specialityname)
						<option value="{{$specialityname->id}}">{{$specialityname->speciality}}</option>
						@endforeach
					</select>
					@error('speciality')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<label for="doctor">Doctor:</label>
					<select class="text-secondary form-control @error('doctor') is-invalid @enderror" name="doctor" id="doctor" data-dependent="day">
						<option value="">Select Doctor</option>
					</select>
					@error('doctor')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<label for="day">Doctor Schedule:</label>
					<select class="schedule text-secondary form-control @error('day') is-invalid @enderror" name="day">
						<option value="">Select Appointment Date</option>
					</select>
					@error('day')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror


					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control text-secondary @error('name') is-invalid @enderror" placeholder="Enter your name">
					@error('name')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="phone">Phone:</label>
					<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">
					@error('phone')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="address">Address:</label>
					<textarea name="address" class="form-control text-secondary @error('address') is-invalid @enderror" placeholder="Enter your address"></textarea>
					@error('address')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
					<label for="situation">Situation:</label>
					<input type="text" name="situation" class="form-control @error('situation') is-invalid @enderror" placeholder="Enter your situation">
					@error('situation')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					
					<button class="btn btn-primary mt-3" type="submit"><i class="fas fa-highlighter"></i> Make Appointment</button>
				</div>
			</div>
		</div>
	</form>
	
</div>
@endsection
@section('script')
	<script type="text/javascript">
		 $(document).ready(function () { 
            $('#speciality').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            console.log(cat_id);
            //ajax
            $.get('/ajax-subcat?cat_id='+ cat_id,function(data){
                //success data
                console.log(data);
                $('#doctor').empty();
                $('#doctor').append('<option value ="">Select Doctor</option>');
                $.each(data,function(create,subcatObj){
                    $('#doctor').append('<option value ="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                });
            });
        	});
            $('#doctor').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            console.log(cat_id);
            //ajax
            $.get('/ajax-subcat1?cat_id='+ cat_id,function(data){
                //success data
                console.log(data);
                $('.schedule').empty();
                $('.schedule').append('<option value ="">Select Schedule</option>');
                $.each(data,function(create,subcatObj){
                	console.log(subcatObj.id);
                    $('.schedule').append('<option value ="'+subcatObj.id+'">'+subcatObj.day+' '+subcatObj.start_time+' - '+subcatObj.end_time+'</option>');
                });
            });
        	});
    	});
	</script>
	@endsection