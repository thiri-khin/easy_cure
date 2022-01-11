@extends('backend_template')
@section('content')
<div class="card shadow mx-3 my-3">
	<div class="card-body">
		<h3 class="text-primary font-weight-bold">Add patient </h3>		
		<form role="form" name="" method="post" action="{{route('patients.store')}}">
										@csrf

			<div class="form-group">
												<label for="doctorname">
													Patient Name
												</label>
												<input type="text" name="patientname" class="form-control @error('patientphone') is-invalid @enderror "  placeholder="Enter Patient Name" required="true" >
												@error('patientname')
				    							<div class="alert alert-danger">{{ $message }}</div>
											    @enderror
			</div>
			<div class="form-group">
												<label for="fess">
													Patient phone no
												</label>
												<input type="text" name="patientphone" class="form-control @error('patientphone') is-invalid @enderror"  placeholder="Enter Patient Contact no" required="true" maxlength="10" pattern="[0-9]+">
												@error('patientphone')
				    							<div class="alert alert-danger">{{ $message }}</div>
											    @enderror
			</div>
			<div class="form-group">
				<label for="address">Patient Address</label>
											
				<textarea name="patientaddress" class="form-control @error('patientaddress') is-invalid @enderror"  placeholder="Enter Patient Address" required="true">
													
			    </textarea>
				@error('patientaddress')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group">
												<label for="fess">
													Medical Remark
												</label>
												<textarea type="text" name="patientremark" class="form-control @error('patientremark') is-invalid @enderror"  placeholder="Enter Patient Medical History(if any)" required="true"></textarea>
												@error('patientremark')
				    							<div class="alert alert-danger">{{ $message }}</div>
											    @enderror
			</div>	
		    <div class="form-group">
												<label for="doctorname">
													Start Cured Date
												</label>
												<input type="date" name="patient_cureddate" class="form-control @error('patient_cureddate') is-invalid @enderror"  placeholder="Enter Patient Name" required="true">
												@error('patient_cureddate')
				    							<div class="alert alert-danger">{{ $message }}</div>
											     @enderror
			</div>
			<div class="form-group">
												<label class="block">
													Gender
												</label>
												<div class="clip-radio radio-primary">
													<input type="radio" id="rg-female" name="gender" value="female" >
													<label for="rg-female">
														Female
													</label>
													<input type="radio" id="rg-male" name="gender" value="male">
													<label for="rg-male">
														Male
													</label>
												</div>
			</div>
											
			<div class="form-group">
												<label for="fess">
													Patient Age
												</label>
												<input type="number" name="patientage" class="form-control @error('patientage') is-invalid @enderror"  placeholder="Enter Patient Age" required="true">
													@error('patientage')
					    							<div class="alert alert-danger">{{ $message }}</div>
												     @enderror
			</div>
											

			<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">Add</button>
		</form>
						
	</div>
</div>				
@endsection