@extends('layouts.technician')



@section('content')

<div class="card" style="width: 30rem; border:none; margin:60px">
        <div class="card-body">
          <h5 class="card-title">Task</h5>
      @if(count($complains)>0)
          @foreach($complains as $complain)
          <h6 class="card-subtitle mb-2 text-muted">Complain ID : {{$complain->type_id }}</h6>
          <h6 class="card-subtitle mb-2 text-muted">Complain : {{$complain->message }}</h6>
          <h6 class="card-subtitle mb-2 text-muted">Address : {{$complain->address }}</h6>
          @endforeach
       
          
          <a href="#" class="card-link">View Details</a>
          <a href="#" class="card-link">Accept</a>
          <a href="#" class="card-link">Location</a>
      
      @else
      <h1>You have not complain</h1>
      @endif

        </div>
      </div>

      
       
@endsection