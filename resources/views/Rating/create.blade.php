@extends('layouts.app')



@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <form action="{{route('rate.update',$ratetechnician->id)}}" method="POST">
                                {{ csrf_field() }}
                                <div class="card">
                                    <div class="container-fliud">
                                        <div class="wrapper row">
                                            <div class="preview col-md-8">
                                                <div class="preview-pic ">
                                                    <div class="tab-pane active" id="pic-1">
                                                        <img src="http://localhost:8000/images/tech.png" width="100px" height="100px" alt="tech" /></div>
                                                </div>
                                            </div>
                                            <div class="details col-md-12">
                                                <div class="rating">
                                                    <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="" data-size="xs">
                                                    <input type="hidden" name="id" required="" value="{{ $ratetechnician->id }}"> 
                                                    <button class="btn btn-success">Submit Review</button>
                                                </div>
                                                
                                                   
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            $("#input-id").rating();
        </script>
        
        @endsection