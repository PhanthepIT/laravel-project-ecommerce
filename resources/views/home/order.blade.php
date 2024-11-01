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
    width: 70%;
    padding: 30px;
    text-align: center;
    background-color: #f9f9f9; /* สีพื้นหลังของคอนเทนเนอร์ */
    border-radius: 10px; /* มุมโค้งมน */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* เงา */
}

table {
    width: 100%; /* ทำให้ตารางเต็มความกว้าง */
    border-collapse: collapse; /* รวมเส้นขอบให้ดูเรียบ */
}

th, td {
    border: 1px solid #ddd; /* เส้นขอบบางๆ */
    padding: 15px; /* เพิ่ม padding */
    text-align: center; /* จัดข้อความชิดซ้าย */
}

th {
    background-color: #5bc0de; /* สีพื้นหลังของหัวตาราง */
    color: black; /* สีตัวอักษร */
    font-size: 15px;
    font-weight: bold;
    text-align: center;
}

tr:nth-child(even) {
    background-color: #f2f2f2; /* สีพื้นหลังสำหรับแถวคู่ */
}

tr:hover {
    background-color: #e0e0e0; /* สีพื้นหลังเมื่อวางเมาส์ */
}

.btn-danger {
    background-color: #dc3545; /* สีพื้นหลังของปุ่ม Cancel */
    color: white; /* สีตัวอักษร */
    padding: 10px 20px; /* เพิ่ม padding */
    border-radius: 5px; /* มุมโค้งมน */
    text-decoration: none; /* เอาเส้นใต้ของลิงก์ออก */
    transition: background-color 0.3s; /* เพิ่มการเปลี่ยนสีพื้นหลังเมื่อวางเมาส์ */
}

.btn-danger:hover {
    background-color: #c82333; /* เปลี่ยนสีเมื่อวางเมาส์ */
}

</style>




   </head>
   <body>
   @include('sweetalert::alert')
      
         <!-- header section strats -->
         @include ('home.header')

         <div class="center">
    <table>
        <tr>
            <th class="th_deg">Product Title</th>
            <th class="th_deg">Quantity</th>
            <th class="th_deg">Price</th>
            <th class="th_deg">Payment Status</th>
            <th class="th_deg">Delivery Status</th>
            <th class="th_deg">Image</th>
            <th class="th_deg">Cancel Order</th>
        </tr>

        @foreach($order as $order)
        <tr>
            <td>{{$order->product_title}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->delivery_status}}</td>
            <td>
                <img height="180" width="180" src="product/{{$order->image}}" alt="Image of {{$order->product_title}}">
            </td>
            <td>
                @if($order->delivery_status=='processing')
                <a onclick="confirmation(event)" class="btn btn-danger" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>
                @else
                <p style="color: blue;">Not Allowed</p>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</div>


<script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                title: "Are you sure to cancel this order",
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