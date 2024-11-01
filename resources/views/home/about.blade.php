<!DOCTYPE html>
<html>
   <head>
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <style type="text/css">
        /* About Section */
.about_section {
   text-align: center;
   padding: 50px 20px;
   animation: fadeIn 1s ease-in-out;
}

.about_title {
   font-size: 36px;
   font-weight: bold;
   margin-bottom: 20px;
   animation: slideDown 0.8s ease-in-out;
}

.about_description {
   font-size: 18px;
   color: #555;
   margin-bottom: 30px;
   max-width: 600px;
   margin-left: auto;
   margin-right: auto;
   animation: fadeIn 1.2s ease-in-out;
}

.about_image_container {
   display: flex;
   justify-content: center;
   animation: fadeIn 1.5s ease-in-out;
}

.about_image {
   width: 100%;
   max-width: 300px;
   border-radius: 15px;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
   transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about_image:hover {
   transform: scale(1.05);
   box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

/* Keyframes for animations */
@keyframes fadeIn {
   from {
      opacity: 0;
   }
   to {
      opacity: 1;
   }
}

@keyframes slideDown {
   from {
      transform: translateY(-20px);
      opacity: 0;
   }
   to {
      transform: translateY(0);
      opacity: 1;
   }
}

      </style>
   </head>
   <body>
   <div class="hero_area">
         <!-- header section strats -->
         @include ('home.header')
         <!-- end header section -->

         <div class="about_section">
   <h1 class="about_title">OUR MISSION</h1>
   <p class="about_description">This IT equipment sales website was founded in 2024 by a group of IT students who were about to graduate to create a modern and accessible platform for everyone. The idea came from seeing a gap in the market where there was a lack of websites that could meet the needs of IT users in terms of choosing quality products at reasonable prices and providing useful advice for non-techies.</p>
   <div class="about_image_container">
      <img src="images/about.jpeg" alt="About Image" class="about_image">
   </div>
</div>

    </div>
          



 
      @include ('home.footer')
      <!-- footer end -->
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