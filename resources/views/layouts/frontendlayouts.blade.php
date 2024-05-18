<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/styel.css')}}">
	<title></title>




<!-------bootstrapcdn------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


	<!-----font awsome start--->
<link rel="stylesheet" href="{{ asset('fronted/css/all.min.css')}}" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>




<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="{{asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{asset('frontend/jquery/3.2.1/jquery.min.js') }}"></script>
<!------ Include the above in your HEAD tag ---------->







<html>
    <head>
        <title>Alphtach | Home</title>

        <link rel="stylesheet" href="{{asset('frontend/bootstrap/4.0.0/css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('frontend/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
    <body>

    <header>
<!-- ======================================Navigation Bar================================================= -->
        <nav class="navbar navbar-expand-lg navStyle">
            <a class="brand-navbar" href="#">Paradise Restaurant</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
                <span><i class="fas fa-align-right iconStyle"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ml-auto navList">
                    <li class="nav-item active"><a href="#" class="nav-link">HOME<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item">
                        <a href="services.html" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="portfolio.html" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                    @guest
                      
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">Login</a>
                    </li>
                    @endguest

                    @auth
                    <li class="nav-item">
                      <a href="{{route('home')}}" class="nav-link">{{auth()->user()->name }}</a>
                  </li>
                  @endauth
                </ul>
            </div>
        </nav>

              
    </header>

   
 <!-- ------mobile menu close -->


@yield('frontend')











<!-- footer sec start -->


      <div class="footer-sec">


            <div class="logo2">
              <h1>Paradise Restaurant</h1>
              <p>A restaurant is business prepares<br>serves food to customers.<br>Meals generally served premises,<br>restaurantsand delivery services.</p>

              <a href="#">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fa-brands fa-youtube"></i>
              </a>
   
              <a href="#">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </div>

          <div class="resource">
              <h1>Resource</h1>

              <ul>
                  
                  <li>
                    <a href="#">Help</a>
                  </li>

                  <li>
                    <a href="#">Events</a>
                  </li>

                  <li>
                    <a href="#">Live Support</a>
                  </li>

                  <li>
                    <a href="#">Open Sources</a>
                  </li>

                 
              </ul>
          </div>

          
          <div class="company">
            <h1>Support</h1>

            <ul>
          
                <li>
                  <a href="#">About Us</a>
                </li>

                <li>
                  <a href="#">Career</a>
                </li>

                <li>
                  <a href="#">Coustomers</a>
                </li>

                <li>
                  <a href="#">Comunity</a>
                </li>
            </ul>
          </div>
          <div class="location">
            <h1>Our Contact</h1>

            <ul>
              <li>
                <a href="#"><i class="fa-solid fa-location-dot"></i> &nbsp;Feni,Bangladesh</a>
              </li>

              <li>
                <a href="#"><i class="fa-solid fa-mobile-screen-button"></i> &nbsp; +8801 23456789</a>
              </li>

              <li>
                <a href="#">
                  <i class="fa-solid fa-envelope"></i> &nbsp;Your@gamil.com
                </a>
              </li>

             
            </ul>
          </div>
             
      </div>

      <div class="copy-rght">
        
              <hr>
            <div>
              <p>2022 &copy; copyrights | All Rights reserved by <span>Farzana Bhuiya</span></p>
            </div>
      
      </div>
    


    <!-- footer sec end -------->




    
</body>

<script src="{{asset('frontend/jquery-3.2.1.slim.min.js')}}" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
</html>

</body>
</html>