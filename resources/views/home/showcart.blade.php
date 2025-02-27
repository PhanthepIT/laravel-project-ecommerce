<!DOCTYPE html>
<html>
   <head>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

      <style type="text/css">
    .center {
        margin: auto;
        width: 70%; /* ปรับความกว้างของตาราง */
        text-align: center;
        padding: 30px;
        border-radius: 10px; /* เพิ่มมุมโค้ง */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* เพิ่มเงา */
        background-color: #f9f9f9; /* เพิ่มสีพื้นหลังให้กับ div */
    }

    table {
        width: 100%; /* ให้ตารางมีความกว้าง 100% */
        border-collapse: collapse; /* ทำให้เส้นขอบติดกัน */
    }

    th, td {
        padding: 15px; /* เพิ่ม padding ให้กับเซลล์ */
    }

    .th_deg {
        font-size: 20px;
        padding: 10px; /* เพิ่ม padding ให้กับ th */
        background: skyblue;
        color: black; /* เปลี่ยนสีตัวอักษร */
        text-transform: uppercase; /* ทำให้ตัวอักษรเป็นตัวพิมพ์ใหญ่ */
    }

    .img_deg {
        height: 150px;
        width: 150px;
        object-fit: cover; /* ทำให้รูปภาพไม่บิดเบี้ยว */
        border-radius: 10px; /* เพิ่มมุมโค้งให้กับรูปภาพ */
    }

    .total_deg {
        font-size: 20px;
        padding: 40px;
        font-weight: bold; /* ทำให้ตัวหนา */
    }


</style>

   </head>
   <body>
   @include('sweetalert::alert')
      <div class="hero_area">
         <!-- header section strats -->
         @include ('home.header')
         <!-- end header section -->

         @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif


      <div class="center">
        <table>
            <tr>
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Product Quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>
            </tr>

            <?php $totalprice=0; ?>

            @foreach($cart as $cart)

            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>฿{{$cart->price}}</td>
                <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
                <td><a class="btn btn-danger" onclick="confirmation(event)" href="{{url('remove_cart',$cart->id)}}">Remove Product</a></td>
            </tr>

            <?php $totalprice=$totalprice + $cart->price ?>

            @endforeach

            

        </table>

        <div>
            <h1 class="total_deg">Total Price : ฿{{$totalprice}}</h1>
        </div>

        <div>
            <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed to Order</h1>
            <a href="{{url('cash_order')}}" class="btn btn-primary">Cash On Delivery</a>
            <a href="{{url('stripe',$totalprice)}}" class="btn btn-info">Pay Using Card</a>
        </div>

      </div>


      
      <!-- footer start -->
      
      <!-- footer end -->
      <div class="cpy_">
      <p class="mx-auto">© 2024 All Rights Reserved By <a href="https://html.design/">DP Shop</a>
      </p>
      </div>

      <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                title: "Are you sure to cancel this product",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode:true,
            })
            .then((willCancel) => {
                if (willCancel) {



                    window.location.href =urlToRedirect;
                }
            });
        }

      </script>


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