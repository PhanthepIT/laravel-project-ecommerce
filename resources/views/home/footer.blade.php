<footer>
    <div class="container">
        <div class="row justify-between items-start">
            <div class="col-md-10">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="210" src="/images/logo.png" alt="#" /></a>
                    </div>
                    <div class="information_f">
                        <p><strong>ADDRESS:</strong> Kamphaeng Saen District, Nakhon Pathom 73140</p>
                        <p><strong>TELEPHONE:</strong> +66 9221 3431</p>
                        <p><strong>EMAIL:</strong> DPShop@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget_menu">
                            <h3>Menu</h3>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('show_cart')}}">Cart</a></li>
                                <li><a href="{{url('show_order')}}">Order</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget_menu">
                            <h3>Account</h3>
                            <ul>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    footer {/* สีพื้นหลัง */
        color: black; /* สีข้อความ */
        padding: 20px 0; /* ระยะห่างด้านบนและล่าง */
    }

    .logo_footer img {
        max-width: 100%; /* ปรับขนาดภาพให้เหมาะสม */
    }

    .information_f p {
        margin: 5px 0; /* ระยะห่างระหว่างพารากราฟ */
    }

    .widget_menu h3 {
        margin-bottom: 10px; /* ระยะห่างด้านล่างของหัวข้อ */
    }

    .widget_menu ul {
        list-style: none; /* ลบจุดหน้าหรือหมายเลข */
        padding: 0; /* ลบการเยื้อง */
    }

    .widget_menu ul li {
        margin: 5px 0; /* ระยะห่างระหว่างรายการ */
    }

    .widget_menu a {
        color: black; /* สีข้อความของลิงก์ */
        transition: color 0.3s; /* การเปลี่ยนสี */
    }

    .widget_menu a:hover {
        color: #ffa500; /* สีเมื่อวางเมาส์ */
    }
</style>
