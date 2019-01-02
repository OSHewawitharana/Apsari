<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/styleoperator.css')}}" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/styleform.css')}}" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/styletech.css')}}" />
    
    <link href="{{ asset('css/simple-sidebar.css') }}" media="all" rel="stylesheet" type="text/css" />

    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
      }
      </script>
    <title>@yield('title')</title>
   
    
  </head>
  <body>
       


    
        <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          {{-- <a href="{{url('/technicians/create')}}">Technician Registration</a> --}}
          <a href="#">Job Details</a>
          <a href="#">Estimations</a>
          <a href="#">Current Status</a>
          <a href="#">Job Status</a>
        </div>
        
        <div id="main">
          <section>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
                     <img src="images/logo.png" width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
                </div>
                <ul class="navbar-nav mr-auto mt-0 mt-lg-1">
                    <h2 class=" font-weight-bold " style="margin-right:100px; color:#FFFFFF">ASPARAI<span style="margin-left:15px; margin-right:15px; ">REPAIR & MAINTENANCE SERVICE</span></h2>
                </ul>
            </nav>
          </section>
    
          <section>
            <nav class="mango_bottom navbar navbar-expand-lg navbar-light " style=" background-color:#CCCCCC ;">
                <button class="openbtn mr-3" onclick="openNav()">☰</button>
                <ul class="nav navbar-top-links navbar-right">
                
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#"  role="button"  aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-home fa-fw" style="font-size:28px"></i>
                    </a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell fa-fw" style="font-size:26px"></i>
                    </a>

                
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-user fa-fw"style="font-size:28px"></i> 

                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                          </div>
                        </li>
                      </ul>
                        
              
              
              
             
       </div>
        </nav>
      </section>

            
          
        </div>
        




 @yield('content')
 </body>

</html>
 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <!-- Popper.JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 <!-- jQuery Custom Scroller CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


