@extends('frontend_template')
@section('content')
	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="offset-1 col-10">
				<h2 class="font-weight-bold my-5" style="color: #03198c;">About Easy Cure</h2>
				<p class="text-justify">Easy Cure Hospital was established to motivate by and anchor on providing advanced and quality healthcare services to the citizens through the combined and dedicated hands of the medical and non-medical experts in the field.
				Since its inception, and with the realization and understanding of the local healthcare needs, Easy Cure Hospital has continued to introduce a wide range of medical treatments and services to further elevate the country’s medical standard while mindfully bridging the gap by importing and introducing state-of-the-art technologies into the local medical scene. Furthermore, the hospital’s continual search for meaningful collaborations with local, overseas specialists and counterparts has laid the platform for providing unparalleled medical treatments to patients while determining possible future demands. This relentless quest for excellence through the provision of both medical and non-medical services to all patients has had eventually gained the trust of not only local patients, but also international patients and visitors. <br>

				To continue with what the hospital has started, everyone in Easy Cure Hospital is prepared to go the extra mile to produce and provide effective and efficient patient centered services. With the passion to learn and to become better than yesterday, Easy Cure Hospital remains focus on improving the comprehensive services that our patients have benefited. The entire team continues to discover, to be steadfast in learning and to be undeterred to provide utmost medical services to our patients. Whilst patients put their trusts in Easy Cure.
				Easy Cure puts her ‘Quality Care’ into action. It is all about the ‘Synergy of international healthcare standard and professional healthcare service providers’. <br>

				Easy Cure Hospital aims to go beyond medical and healthcare services. Emphasis has also been placed on forging and nurturing healthy working relationships with all our trusted partners to ensure growth and mutual benefits. Easy Cure organizes and conducts regular consultations and encourages discussions with respected and credible working partners and stakeholders to cultivate good practices in the medical field and to advance cooperation to benefit individual, community and the country. As a forward looking hospital, Easy Cure Hospital prides itself to work with the acknowledgment and understanding that stagnation leads to impossibilities, while being proactive leads to possibilities.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="offset-lg-1 offset-sm-1 offset-md-1 col-lg-3 col-sm-10 col-md-4">
				<h3 class="font-weight-bold mt-5" style="color: #03198c;">Vision</h3>
				<p class="text-justify">#To become No.1 trusted and No.1 service providing private hospital in Myanmar healthcare system</p>
			</div>
			<div class="offset-lg-1 offset-sm-1 offset-md-1 col-lg-3 col-sm-10 col-md-5">
				<h3 class="font-weight-bold mt-5" style="color: #03198c;">Mission</h3>
				<p class="text-justify">#To provide international standard healthcare services in Myanmar with reasonable pricing</p>
			</div>
			<div class="offset-lg-1 offset-sm-1 offset-md-1 col-lg-3 col-sm-10 col-md-4">
				<h3 class="font-weight-bold mt-5" style="color: #03198c;">Motto</h3>
				<p>#EASY CURE,<br> EASY LIFE!</p>
			</div> 	
		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="offset-1 col-10">
				<form class="form-group" action="{{route('contact.store')}}" method="post">
					@csrf
					<h2 class="font-weight-bold my-5" style="color: #03198c;">Keep In Touch</h2>
					<div class="row">
						<div class="col">
							<label for="name">Name:</label>
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
							@error('name')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
							<label for="email">Email:</label>
							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
							@error('email')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
							<label for="phone">Phone:</label>
							<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror">
							@error('phone')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
							<label for="message">Message:</label>
							<textarea name="message" class="form-control @error('message') is-invalid @enderror"></textarea>
							@error('message')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
							<button class="btn mt-3" type="submit" style="background-color: #03198c; color: white;"><i class="fas fa-paper-plane"></i> SEND MESSAGE</button>							
							<button type="clear" class="btn btn-success mt-3 mx-3"><i class="fas fa-eraser"></i> Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection