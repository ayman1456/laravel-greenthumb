@extends('layout.backendlayout')

@section('content')
  <!-- ========== title-wrapper start ========== -->
  <div class="title-wrapper pt-30">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="title">
          <h2>Products
          </h2>
        </div>
      </div>
      <!-- end col -->
     
    </div>
    <!-- end row -->
  </div>
  <!-- ========== title-wrapper end ========== -->

  <div class="container">

    <div class="row">
      <div class="col-lg-5 ">
        <div class="card-style">
          <form action="{{ route('products.save', $editedProducts->id ?? null) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-style-1 mb-2">
              <input type="text" class="form-control" placeholder="Food Name" name="name" value="{{ $editedProducts->title ?? null }}">
              @error('title')
              <span class="text-danger">
                {{ $message }}
              </span>
  
              @enderror

  
            </div>
  
            <div class="input-style-1 mb-2">
              <input type="number" class="form-control" placeholder="Food Price" name="price" value="{{ $editedProducts->price ?? null }}">
              @error('price')
              <span class="text-danger">
                {{ $message }}
              </span>
  
              @enderror
            </div>
            <div class="input-style-1 mb-2">
              <img src="" width="50%" alt="" class="imagePreview">
  
              <input type="file" class="form-control"placeholder="Food Price" name="image" id="foodImage">
  
              @error('image')
              <span class="text-danger">
                {{ $message }}
              </span>
  
              @enderror
            </div>
            <div class="input-style-1 mb-2">
              <textarea placeholder="Details" class="form-control" name="details">{{ $editedProducts->detail ?? null }}</textarea>
  
              @error('detail')
              <span class="text-danger">
                {{ $message }}
              </span>
  
              @enderror
            </div>
  
            
  
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
          </form>
        </div>
      </div>
  
      <!--right side stars-->
  
      <div class="col-lg-7 ">
        <div class="card-style">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>#</th>
                <th width="80px">Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Categories</th>
                <th>Action</th>
              </tr>
              @foreach ($products as $key=>$product)
  
  
  
              <tr>
                <td>{{ ++$key }}</td>
                <td><img src="{{ asset('storage/'.$product->image) }}" alt="" class="w-100"></td>
                <td class="text-center">{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
              
                <td>
                  <a href="{{ route('products.edit', $product->id) }}" class="text-primary"><i class="fa-solid fa-pencil"></i></a>
                  <a href="{{ route('products.delete', $product->id) }}" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  
  @push('customCss')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <style>
    span.select2 span {
      width: 100% !important;
    }
  </style>
  @endpush
  
  @push('customJs')
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    let foodImageInput = document.querySelector('#foodImage')
                  let previewImg = document.querySelector('.imagePreview')
                  foodImageInput.addEventListener("change", function (event) {
                    let url =  URL.createObjectURL(event.target.files[0])
                    previewImg.src = url
                  })
  
  </script>
  
  <script>
    $(document).ready(function() {
    $('.mySelect2').select2();
    });
  </script>
  @endpush


@endsection