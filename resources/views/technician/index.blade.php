@extends('layouts.technician')



@section('content')
<div class="container">
		<div class="card-deck">
		  <div class="card">
			<div class="card-body text-center">
			  <h3 class="card-text">New Task</h3>
			  <img src="{{ asset('images/t1.png')}}" alt="task" style="height:150px;">
			  <br>
			  <a href="{{url('/view')}}"><img src="{{ asset('images/t4.png')}}" alt="task" style="height:30px; float:right;"></a>
			  			</div>
		  </div>
		  <div class="card ">
			<div class="card-body text-center">
			  <h3 class="card-text">Estimations</h3>
			  <img src="{{ asset('images/t2.png')}}" alt="task" style="height:150px;">
			  <br>
			  
			  <a href=""><img src="{{ asset('images/t4.png')}}" alt="task" style="height:30px; float:right;"></a>
			</div>
		  </div>
		  <div class="card ">
			<div class="card-body text-center">
			  <h3 class="card-text">Status Update</h3>
			  <img src="{{ asset('images/t3.png')}}" alt="task" style="height:150px;">
			  <br>
			  <a href=""><img src="{{ asset('images/t4.png')}}" alt="task" style="height:30px; float:right;"></a>
			</div>
		  </div>
		   
		</div>

		<div class="row mt-4">
				<div class="col-lg-6">Today Working Progress</div>
				<div class="col-lg-6">Ratings</div>
			  </div>
	  </div>

	 
	  
@endsection