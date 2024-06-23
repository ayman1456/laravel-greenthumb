@extends('layout.frontend')
@section('content')



<!--second section-->
<section id="banner">
  <a href="#">
    <div class="section1" style="background-image: url({{ asset('assets/img/bannerhd.png') }});">

    </div>
  </a>
</section>
<!--second section ends-->

<!--featured cards-->


<section>
  <h2 class="display-1  mx-auto mt-5" id="chead" style="margin-top: 40px; margin-bottom:40px">Featured Item</h2>


  <div class="container">
    <div class="row">

      @foreach ($featuredProducts as $featured)


      <div class="col-lg-4 col-xl-3 col-6">

        <div class="card mt-2 mx-2">
          <img class="card-img-top" src="{{ asset('assets/img/product/product1.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn" style="background-color: rgba(124,144,135,255); color:white">View more</a>
          </div>
        </div>
      </div>
      @endforeach




    </div>
  </div>
</section>

<!--cfeatured ards ends-->


<section>
  <!--categories cards-->


  <h2 class="display-1  mx-auto mt-5" id="chead" style="margin-top: 40px; margin-bottom:40px">New Products</h2>

  <div class="container">
    <div class="row">


      @foreach ($products as $product)
      
      
      <div class="col-lg-4 col-xl-3 col-6">
      
        <div class="card mt-2 mx-2">
          <img class="card-img-top" src="{{ asset('storage/'.$product->image) }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ Str::limit($product->detials, 30, '...') }}</p>
            <a href="{{ route('product.show', $product->id) }}" class="btn" style="background-color: rgba(124,144,135,255); color:white">View more</a>
          </div>
        </div>
      </div>
      @endforeach



    </div>
  </div>
  <!--categories card ends-->
</section>


@endsection