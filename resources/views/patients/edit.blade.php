@extends('backend_template')
@section('content')
<div class="card shadow mx-3 my-3">
	<div class="card-body">
	<h3>Edit Patient </h3>					
						
	<form role="form" name="" method="post" action="{{route('patients.update',$patients->id)}}">
								@csrf
								@method('PUT')

								<div class="form-group">
									<label for="doctorname">
										Patient Name
									</label>
									<input type="text" name="patientname" class="form-control @error('patientname') is-invalid @enderror" value="{{$patients->name}}" required="true">
									@error('patientname')
    							   <div class="alert alert-danger">{{ $message }}</div>
							         @enderror
								</div>
								<div class="form-group">
									<label for="fess">
										Patient phone no
									</label>
									<input type="text" name="patientphone" class="form-control @error('patientphone') is-invalid @enderror"  value="{{$patients->phone}}" required="true" maxlength="10" pattern="[0-9]+">
									@error('patientphone')
	    							<div class="alert alert-danger">{{ $message }}</div>
								     @enderror
								</div>
								<div class="form-group">
									<label for="address">
										Patient Address
									</label>
									<textarea name="patientaddress" class="form-control @error('patientphone') is-invalid @enderror" required="true">{{$patients->address}}</textarea>
										@error('patientaddress')
    							   <div class="alert alert-danger">   {{ $message }}</div>
							       @enderror
								</div>
								<div class="form-group">
									<label for="fess">
										Medical Remark
									</label>
									<textarea type="text" name="patientremark" class="form-control @error('patientremark') is-invalid @enderror"   required="true">{{$patients->remark}}</textarea>
									@error('patientremark')
    							     <div class="alert alert-danger">{{ $message }}</div>
							       @enderror
								</div>	
								<div class="form-group">
									<label for="doctorname">
										Start Cured Date
									</label>
									<input type="text" name="patient_cureddate" class="form-control @error('patient_cureddate') is-invalid @enderror"   value="{{$patients->cured_date}}" required="true">
									@error('patient_cureddate')
    							    <div class="alert alert-danger">{{ $message }}</div>
							         @enderror
								</div>
								<div class="form-group">
									<label class="block">
										Gender
									</label>
									<div class="clip-radio radio-primary">
										<input type="radio" id="rg-female" name="gender" value="female" checked="">
										<label for="rg-female">
											Female
										</label>
										<input type="radio" id="rg-male" name="gender" value="male" checked="">
										<label for="rg-male">
											Male
										</label>
									</div>
								</div>
								<div class="form-group">
									<label for="fess">
										Patient Age
									</label>
									<input type="number" name="patientage" class="form-control @error('patientage') is-invalid @enderror"  value="{{$patients->age}}" required="true">
									@error('patientagess')
    							    <div class="alert alert-danger">{{ $message }}</div>
							         @enderror
								</div>
									<div class="form-group">
						<label class="block">
							Patient Content:
						</label>
						<div class="clip-radio radio-primary">
							<input type="radio" id="hospitalized" name="hospital" value="Hospitalized" checked="" >
							<label for="hospitalized">
								Hospitalized
							</label>
							<input type="radio" id="nothospitalized" name="hospital" value="Not Hospitalized"checked="">
							<label for="nothospitalized">
								Not Hospitalized
							</label>
						</div>
					</div>


				<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">Update</button>
									
								
	</form>
	</div>
</div>	
@endsection						