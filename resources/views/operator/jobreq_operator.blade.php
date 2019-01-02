@extends('layouts.operator')
@section('content')
<div class="container">
<br/>
<div class="container-fluid col-md-8 mr-3">
         <div class="card  mb-1 justify-content-center ">
             <div class="card-header"><h5>Add Complaints<h5></div>

                 <div class="card-body justify-content-center">
                   
                     <div class="col-md-12 justify-content-center">
                         <form method="post" action="{{ action('CustomercomplainController@store') }}"   class="form-horizontal mt-4" enctype="multipart/form-data">
                         {{csrf_field()}} <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                             <div class="form-group   {{ $errors->has('type') ? 'has-error' : '' }} ">
                                 <label for="productcatname"  class=" col-form-label text-left" >Product Type</label>
                                     <div class="col-sm-8 offset-sm-1">
                                         <select id="type" class="form-control select dynamic" name="type" data-dependent="name" autofocus>
                                             <option value="" class="form-control" autofocus>Choose Product Type</option>
                                         </select>
                                     </div>
                                      
                             </div>
                                             
                     </div>


                     <div class="form-group   {{ $errors->has('name') ? 'has-error' : '' }} ">
                         <label for="ProductName"  class="col-form-label text-left">Product Name</label>
                             <div class="col-sm-8  offset-sm-1 ">
                                 <input type="text" class="form-control" name="name" value="{{old('name')}}" id="ProductName" placeholder="Enter your product" autofocus>
                                 <!--<select class="form-control select" name="name"  id="name"  autofocus>
                                  <option value=""></option>
                                  </select>!-->
                                  @if ($errors->has('name'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                                 @endif
                             </div>
                                
                     </div>


                     <div class="form-group  {{ $errors->has('message') ? 'has-error' : '' }} ">
                         <label for="Message" class=" col-form-label text-left">Message</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <textarea class="form-control message textarea " name="message" id="Message" rows="3" autofocus></textarea>
                                 @if ($errors->has('message'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('message') }}</strong>
                                     </span>
                                  @endif
                             </div> 

                                 
                     </div>


                     <div class="form-group mt-0  {{ $errors->has('address') ? 'has-error' : '' }} ">
                         <label for="Address"  class=" col-form-label text-left" >Address</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="address" value="{{old('address')}}" id="Address" placeholder="Enter your place address" autofocus>
                                 @if ($errors->has('address'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('address') }}</strong>
                                     </span>
                                 @endif
                              </div>
                                 
                     </div>

                     <div class="form-group  {{ $errors->has('region') ? 'has-error' : '' }} ">
                         <label for="City"  class="col-form-label text-left" >City</label>
                         <div class="col-sm-8 offset-sm-1">
                             <input type="text" class="form-control" name="region" value="{{old('region')}}" id="City" placeholder="Enter the city near by your place" autofocus>
                             @if ($errors->has('region'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('region') }}</strong>
                                     </span>
                             @endif
                         </div>
                                
                     </div>

                     <div class="form-group ">
                   
                    
                   
                    <div class="col-sm-4 offset-sm-5 mr-1 ">
                         <button type="submit" class="btn btn-primary col-10" > Submit </button>
                    </div>
                   
                    </div>
                    </form>
                 </div>
             </div>
         </div>
         </div>
         <br>  





@endsection