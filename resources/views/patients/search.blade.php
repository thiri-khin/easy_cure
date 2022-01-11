@extends('backend_template')
@section('content')
<div class="card shadow mx-3 my-3">
	<div class="card-body">
         <div class="container-fluid container-fullw bg-white">
	<h3 class="my-5 text-primary">Patient Search</h3>
	<div class="row my-5">
		<div class="col-md-12">
			<form action="{{route('search.store')}}" method="post">
			@csrf
				<div class="input-group">
              <input type="text" class="w-50 form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="search" id="search">
              <div class="input-group-append">
                <button class="btn btn-primary w-20" id="searchbtn">
                  <i class="fas fa-search fa-sm"></i> Search
                </button>
   
              </div> 
              </div>
               <!-- --------search option----------- -->


				<!-- <div class="form-group">
					<label for="doctorname">
					Search by Name</label>
					<input type="text" name="searchdata" id="searchdata" class="form-control" value="" required='true'>
				</div>

				<button type="submit" name="search" id="submit" class="btn btn-o btn-primary">Search</button> -->
			</form>
				
					
				</div>
			</div>
	    </div>
		</div>
	</div>
         </div>
    	</div>
</div>
@endsection