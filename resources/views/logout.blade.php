@extends('frontend_template')
@section('content')
<div class="card shadow offset-3 col-6" style="margin-top: 180px;">
	<div class="card-body">
		<h2 class="text-dark font-weight-bold">You've logged out!</h2>
		<p><a href="{{ route('login') }}">Login again?</a></p>
	</div>
</div>
@endsection