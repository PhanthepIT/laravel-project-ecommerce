<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
    .div_center {
        text-align: center;
        padding-top: 40px;
    }

    .h2_font {
        font-size: 40px;
        padding-bottom: 40px;
        color: white; /* สีเข้มขึ้นเพื่อความชัดเจน */
    }

    .input_color {
        color: black;
        padding: 10px; /* เพิ่ม padding */
        border: 1px solid #ccc; /* เส้นขอบ */
        border-radius: 5px; /* มุมโค้ง */
        transition: border-color 0.3s; /* เปลี่ยนสีเมื่อ focus */
    }

    .input_color:focus {
        border-color: #007BFF; /* เปลี่ยนสีเมื่อ focus */
        outline: none; /* ลบขอบมาตรฐาน */
    }

    .center {
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 1px solid #ddd; /* เส้นขอบเบา */
        border-radius: 10px; /* มุมโค้ง */
        background-color: #ffffff; /* ใช้พื้นหลังขาวเพื่อความชัดเจน */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* เงา */
        padding: 20px; /* เพิ่ม padding */
    }

    .btn {
        padding: 10px 15px; /* ขนาดปุ่ม */
        border-radius: 5px; /* มุมโค้ง */
        transition: background-color 0.3s; /* การเปลี่ยนสีเมื่อ hover */
    }

    .btn-primary {
        background-color: #007BFF; /* สีหลัก */
        color: white; /* สีข้อความ */
        font-weight: bold; /* ตัวหนา */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* สีเมื่อ hover */
    }

    .btn-danger {
        background-color: #dc3545; /* สีอันตราย */
        color: white; /* สีข้อความ */
        font-weight: bold; /* ตัวหนา */
    }

    .btn-danger:hover {
        background-color: #c82333; /* สีเมื่อ hover */
    }

    table {
        width: 100%; /* ความกว้างของตาราง */
        border-collapse: collapse; /* รวมเส้นขอบ */
    }

    th, td {
        padding: 12px; /* Padding สำหรับ th และ td */
        text-align: left; /* ข้อความซ้าย */
        border-bottom: 1px solid #ddd; /* เส้นขอบใต้ */
        color: #333; /* สีตัวอักษร */
    }

    th {
        background-color: #f2f2f2; /* พื้นหลังส่วนหัว */
    }

    tr:hover {
        background-color: #f1f1f1; /* สีพื้นหลังเมื่อ hover แถว */
    }
</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
    <div class="content-wrapper">

        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="div_center">
            <h2 class="h2_font">Add Category</h2>

            <form action="{{ url('/add_catagory') }}" method="POST" class="mb-4">
                @csrf

                <input class="input_color" type="text" name="catagory" placeholder="Write category name" required>
                <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
            </form>
        </div>

        <table class="center">
            <tr>
                <th>Category Name</th>
                <th>Action</th>
            </tr>

            @foreach($data as $item)
            <tr>
                <td>{{ $item->catagory_name }}</td>
                <td>
                    <a onclick="confirmation(event)" class="btn btn-danger" href="{{ url('delete_catagory', $item->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                title: "Are you sure to delete this category",
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
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>