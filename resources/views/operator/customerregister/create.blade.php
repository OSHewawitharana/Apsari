<!DOCTYPE html>
 <html lang="en">
     <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="icon" type="image/png" href="{{ asset('images/logo.png')}}" />
     <link href="{{ asset('css/styleform.css') }}" media="all" rel="stylesheet" type="text/css" />
     <link href="{{ asset('css/stylecustomer.css') }}" media="all" rel="stylesheet" type="text/css" />
     @yield('link')
     <title>@yield('title')</title>
    
     </head>
     <body>
  
     <nav class="navbar navbar-expand-sm fixed-top navbar-dark">
       <a class="navbar-brand" href="#"> <img src="{{ asset('images/logo.png')}}" width="160px" height="40px" alt="Responsive image" class="d-inline-block align-left"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

       <div class="collapse navbar-collapse" id="navbarsExample02">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link " href="technicianjob">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link active  dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Customer</a>
               <div class="dropdown-menu navdropdown" aria-labelledby="dropdown01">
                 <a class="dropdown-item" href="{{url('customerregister/create')}}">Add</a>
                 <a class="dropdown-item" href="{{url('customerregister')}}">View</a>
               </div>
           </li>
         </ul>
         <ul class="navbar-nav ml-auto mr-2">
             <li class="nav-item active dropdown ">
                   <div class="container mr-5">
                     <a class="nav-link active dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->fname }} <span class="caret"></span></a>
            
                     <div class="dropdown-menu navdropdown col-1 dropdown-menu-left " aria-labelledby="dropdown03">
                         <a class="dropdown-item" href="{{url('technicianprofile')}}">Profile</a>
                         <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                         </form>
                     </div>
                   </div>
             </li>
          
         </ul>
       
       </div>
     </nav>
     <div class="container" style="margin-top:100px;">
     <div class="container-fluid col-md-8">
         <div class="card mt-2 mb-1 justify-content-center ">
             <div class="card-header"><h5> Customer Register <h5></div>

                 <div class="card-body justify-content-center">
                   
                     <div class="col-md-12 justify-content-center">
                         <form method="post" action="{{ action('UsersregisterController@store') }}"   class="form-horizontal mt-4" enctype="multipart/form-data">
                         {{csrf_field()}} <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            
                     <div class="form-group mt-0  ">
                         <label for="First name"  class=" col-form-label text-left" >First name</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="fname"  autofocus>
                                
                              </div>
                                 
                     </div>

                      <div class="form-group mt-0  ">
                         <label for="Last name"  class=" col-form-label text-left" >Last name</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="lname"  id="Last name" autofocus>
                                
                              </div>
                                 
                     </div>

                     <div class="form-group mt-0  ">
                         <label for="E-mail"  class=" col-form-label text-left" >E-mail</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="email" class="form-control" name="email"  id="E-mail" autofocus>
                                
                              </div>
                                 
                     </div>

                      <div class="form-group mt-0  ">
                         <label for="NIC"  class=" col-form-label text-left" >NIC</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="nid"  id="NIC" autofocus>
                                
                              </div>
                                 
                     </div>

                     <div class="form-group mt-0  ">
                         <label for="Contact Number"  class=" col-form-label text-left" >Contact Number</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="mobile"  id="mobile" autofocus>
                                
                              </div>
                                 
                     </div>

                     <div class="form-group mt-0  ">
                         <label for="Work Place"  class=" col-form-label text-left" >Work Place</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="company"  id="company" autofocus>
                                
                              </div>
                                 
                     </div>

                     

                     <div class="form-group ">
                         <label for="Address"  class="col-form-label text-left" >Address</label>
                         <div class="col-sm-8 offset-sm-1">
                             <input type="text" class="form-control" name="address"  id="address" autofocus>
                            
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
     </div>
     <div class="container-fluid mt-2 mb-0">
       <div class="row  footer">
         <ul class="mr-auto ml-0 mt-3 mb-1 text-left">
            <li><h4>Get in touch</h4></li>
            <li><h6>Telephone :- 011-2590758</h6></li>
            <li><h6>Address:- No.252, Golumadama Junction, Rathmalana</h6></li>
            <li><h6>Email:- sales@asparai.com</h6></li>
         </ul>
         
         <ul class="ml-auto  mt-3 mb-1 text-left">
         <div class="container mr-4">
           <div class="container">
            <li><a class="text-white" href="#"><h5>Home</h5></a></li>
            <li><a class="text-white" href="#"><h5>Product</h5></a></li>
            <li><a class="text-white" href="#"><h5>Service</h5></a></li>
            <li><a class="text-white" href="#"><h5>Request</h5></a></li>
           </div>
           </div>
         </ul>
         
      </div>
     </div>
   

    <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <!-- Popper.JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 <!-- jQuery Custom Scroller CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

 </body>
 </html>
