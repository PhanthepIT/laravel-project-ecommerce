<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
     
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>DP Shop</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include ('home.header')
         <!-- end header section -->
      <br>

         <div class="col-sm-6 col-md-8 col-lg-8 mx-auto p-3 mt-6">
  <div class="card shadow-sm p-3 ">
    <div class="row no-gutters d-flex align-items-center ">
      <!-- ภาพสินค้า -->
      <div class="col-md-6">
        <img src="/product/{{$product->image}}" class="img-fluid" alt="{{$product->title}}">
      </div>

      <!-- รายละเอียดสินค้า -->
      <div class="col-md-6 pl-4">
        <h5 class="card-title font-weight-bold">{{$product->title}}</h5>

        @if($product->discount_price != null)
          <h6 class="text-danger font-weight-bold">Discount Price: ฿{{$product->discount_price}}</h6>
          <h6 class="text-muted" style="text-decoration: line-through;">Price: ฿{{$product->price}}</h6>
        @else
          <h6 class="text-primary font-weight-bold">Price: ฿{{$product->price}}</h6>
        @endif

        <p class="mb-1"><strong>Category:</strong> {{$product->catagory}}</p>
        <p class="mb-1"><strong>Details:</strong> {{$product->description}}</p>
        <p class="mb-3"><strong>Available Quantity:</strong> {{$product->quantity}}</p>

        <form action="{{url('add_cart', $product->id)}}" method="POST">
          @csrf
          <div class="input-group mb-3">
            <input type="number" name="quantity" value="1" min="1" max="{{$product->quantity}}" class="form-control" style="max-width: 80px;">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Add To Cart</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

      
      <div class="cpy_">
      <p class="mx-auto">© 2024 All Rights Reserved By <a href="https://html.design/">DP Shop</a>
      </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>