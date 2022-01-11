@extends('backend_template')
@section('content')
			
		
			<!-- end: TOP NAVBAR -->
	
					<!-- start: PAGE TITLE -->
<section id="page-title">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<h2 class="mainTitle text-primary">Between Dates | Reports</h2>
			</div>
			<ol class="breadcrumb">
				<li>
					<span>Between Dates</span>
				</li>
				<li class="active">
					<span> Reports</span>
				</li>
			</ol>
		</div>
	</div>
</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
<div class="card shadow mx-3 my-3">
	<div class="card-body">

		<form role="form" method="post" action="{{route('date.store')}}">
		@csrf
		<div class="form-group">
		<label for="exampleInputPassword1">
		From Date:
		</label>
		<input type="date" class="form-control" name="fromdate" id="fromdate" value="" required='true'>
		</div>

		<div class="form-group">
		<label for="exampleInputPassword1">
		To Date::
		</label>
		<input type="date" class="form-control" name="todate" id="todate" value="" required='true'>

		</div>	


		<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary"><i class="fas fa-search fa-sm"></i> Search</button>
		</form>
	</div>
</div>		
									
@endsection