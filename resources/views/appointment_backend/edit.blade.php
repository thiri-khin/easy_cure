@extends('backend_template')
@section('content')
<form class="form-group" action="{{route('patients.store',$appointment->id)}}" method="post">
@csrf
<div class="card shadow m-4">
	<div class="card-body font-weight-bold">
		<div class="container-fluid m-0 p-0">
			<div class="row">
				<div class="offset-2 col-8">
					<h4 class="text-primary font-weight-bold my-3">Patient Form</h4>
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$appointment->name}}">
					@error('name')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="phone">Phone:</label>
					<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$appointment->phone}}">
					@error('phone')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="address">Address:</label>
					<textarea name="address" class="form-control @error('address') is-invalid @enderror">{{$appointment->address}}</textarea>
					@error('address')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="situation">Situation:</label>
					<input type="text" name="situation" class="form-control @error('situation') is-invalid @enderror" value="{{$appointment->patient_situation}}">
					@error('situation')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label for="date">Date:</label>
					<input type="date" name="date" class="form-control @error('date') is-invalid @enderror">
					@error('date')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<label class="block">Gender</label>
					<div class="clip-radio radio-primary form-group">
						@if($appointment->gender=='female')
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
					<label for="age">Patient Age:</label>
					<input type="text" name="age" class="form-control @error('age') is-invalid @enderror">
					@error('age')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<div class="form-group">
						<label class="block">
							Patient Content:
						</label>
						<div class="clip-radio radio-primary">
							<input type="radio" id="hospitalized" name="hospital" value="Hospitalized" >
							<label for="hospitalized">
								Hospitalized
							</label>
							<input type="radio" id="nothospitalized" name="hospital" value="Not Hospitalized">
							<label for="nothospitalized">
								Not Hospitalized
							</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary mt-3 font-weight-bold"><i class="fas fa-highlighter"></i> Save</button>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
@endsection