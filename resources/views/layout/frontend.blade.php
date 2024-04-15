<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('assets/css/index.css')}}" rel="stylesheet">
    <title>GreenThumb</title>
</head>
<body>
  <!--navbar starts-->
<div class="topnav" id="myTopnav">
  <div class="navlogo">
    <a href="#home" class="active"><img src="{{asset('assets/images/isolated-monochrome-black.svg')}}" height="100%" width="100px"></a> 
  </div>

  <div class="navlast">
    <input class="navsearch"type="text">
    <i class="fa-solid fa-magnifying-glass"></i>
    <i class="fa-regular fa-user"></i>
    <i class="fa-regular fa-heart"></i>
    <i class="bi bi-bag"></i>
  </div>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>