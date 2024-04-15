<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="{{asset('assets/css/index.css')}}" rel="stylesheet">
  <title>GreenThumb</title>
</head>

<body>
  <!--navbar starts-->
  <nav class="navbar topnav navbar-expand-lg bg-body-tertiary d-none d-lg-block">
    <div class="container-fluid justify-content-lg-between">
      <a class="navbar-brand" href="#">
        <img src="{{asset('assets/images/isolated-monochrome-black.svg')}}" height="100%" width="100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav m-auto mb-2 mb-lg-0 align-items-center">
          <li class="nav-item">
            <form action=""><input class="navsearch" type="text"></form>
          </li>
          <li class="nav-item mx-4 ">
            <i class="fa-solid fa-magnifying-glass"></i>
          </li>
          <li class="nav-item mx-4">
            <a class="text-dark" href="{{ route('profile') }}"><i class="fa-regular fa-user"></i></a>
          </li>

          <li class="nav-item mx-4">
            <i class="fa-regular fa-heart"></i>
          </li>
          <li class="nav-item mx-4">
            <i class="bi bi-bag"></i>
          </li>

        </ul>

      </div>

      <div class="navLinks">
        <div class="navitems">
          <a href="{{ route('home') }}" class="active">Home</a>
          <a href="#news">Categories</a>
          <a href="{{ route('contactus') }}">Contact</a>
          <a href="{{ route('aboutus') }}">About</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </div>


    </div>
  </nav>

  {{-- NAVBAR SM --}}
  <nav class="py-4 d-lg-none">
    <div class="container">
      <div class="row">
        <div class="logo col-6">
          <a class="navbar-brand" href="#">
            <img src="{{asset('assets/images/isolated-monochrome-black.svg')}}" height="100%" width="100px">
          </a>
        </div>
        <div class="menu col-6 text-end">
          <a  class="text-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
              <span><i class="bi bi-list-nested"></i></span>            
          </a>

          
          <div class="offcanvas sidebarSm offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="searchArea">
              <form action="">
                <input type="text" placeholder="Search...">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
              </form>
            </div>

            <div class="navLinks  text-center mt-4">
              <ul>
                <li><a  href="#">Home</a></li>
                <li><a  href="#">Categories</a></li>
                <li><a  href="#">Contact</a></li>
                <li><a  href="#">About</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </nav>
  {{-- NAVBAR SM END --}}


  <!--navbar ends-->

  @yield('content')


  <!--footer-->

  <div class="footer">

    <div class="foot1">
      <h1>Opening time</h1>
      <p>Monday-Friday: 9:00am-5:00pm</p>
      <p>Saturday: 10:00am-2:00pm</p>
      <p>Sunday: Closed</p>
    </div>

    <div class="foot2">
      <h1>Information</h1>
      <p>About us</p>
      <p>Contact us</p>
      <p>Privacy Policy</p>
      <p>Terms & Conditions</p>
    </div>


    <div class="foot3">
      <img src="{{ asset('assets/images/profile.png') }}">
    </div>

    <div class="foot4">
      <h1>Follow us</h1>
      <p>Facebook</p>
      <p>Instagram</p>
      <p>Twitter</p>
      <p>Youtube</p>
    </div>

    <div class="foot5">
      <h1>Contact us</h1>
      <p>+254700000000</p>
      <p>+254700000000</p>
      <p>+254700000000</p>
    </div>
  </div>

  <!--footer ends-->

  <script src="{{asset('assets/js/index.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>