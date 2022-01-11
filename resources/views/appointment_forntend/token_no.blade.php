@extends('frontend_template')
@section('content')
<div class="container" style="margin-top: 200px; margin-bottom: 150px;">
	<div class="row">
		<div class="offset-2 col-8">
			<div class="card shadow border-primary">
				<div class="card-body" style="background-image: url({{asset('caremed-master/images/a.jpg')}});">
					<h3 class="text-dark font-weight-bold p-5">You've made an appointment successfully! <i class="far fa-thumbs-up"></i></h3>
					<h4 class="text-dark font-weight-bold pb-5 px-5">Your token number : <span class="text-primary">{{$appointment->id}}</span></h4>
					<h4 class=" pb-5 px-5">
					<em>Note your token before you reaload the page!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection