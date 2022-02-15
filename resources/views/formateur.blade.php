<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trainers</title>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style3.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/card.css') }}">
  <style>

@import url("https://fonts.googleapis.com/css2?family=Play&display=swap");

*{
  font-family: "Play", sans-serif;
}


  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
    <div style="margin-top:10px; ">
      <h4 style=" color:white;font-weight:600; ">CNI</h4>     
      <h4 style=" margin-left:40px; margin-top:-36px; color:#FFD300;font-weight:600;  ">Courses.</h4>
    </div>      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul class="nav-bar">
          <li><a class="nav-link " href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link " href="{{ route('formation') }}">Courses</a></li>
          <li><a class="nav-link active " href="{{ route('formateur') }}">Trainers</a></li>
          <ul  style ="margin-left:30px;">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style = "margin-right:20px;">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" style = "color: black;"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
                       
         
     
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 style="margin-top:-100px;">Our Trainers</h1>
          <h2>Our talented and knowledgeable trainers working in every industry. </h2>
         
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/bg-formateurs.png" class="img-fluid animated" alt="" >
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  


  

<div class="cards">
 @foreach ($user as $user)
<div class="card">
<div class="additional">
    <div class="user-card">
    
      <svg style="margin-top:60px; margin-left:20px;" width="110" height="110" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc" class="center">
       
        <style>
          .line { fill: none; stroke: rgba(236, 236, 236, 0.8); stroke-width:2px; }
        </style>


        <defs>
          <clipPath id="scene">
            <circle cx="125" cy="125" r="120"/>
            
          </clipPath>

        </defs>
        <circle cx="125" cy="125" r="120" fill="rgba(239, 239, 239, 0.8)" />
      

        <g stroke="none" stroke-width="0" clip-path="url(#scene)">
          <rect x="0" y="0" width="250" height="250" fill="rgba(236, 236, 236, 0.8)" />
          <img src="../assets/avatars/{{ $user->avatar }}" style="width:115px; height:115px; margin-top:-130px; margin-left:18px; border-radius:50%;
  -moz-box-shadow: 0px 6px 5px rgb(76, 81, 126);
  -webkit-box-shadow: 0px 6px 5px rgb(76, 81, 126);
  box-shadow: 0px 6px 8px rgb(76, 81, 126);
  -moz-border-radius:190px;
  -webkit-border-radius:190px; ">
        </g>
      </svg>
    </div>

    <div class="more-info">
      <h1 >{{ $user->name }}</h1>
      <div class="coords">
      <span style="margin-top:40px;" >Position/Role: {{ $user->formateur['formateur_job'] }}</span>
      <span style="margin-right:140px; margin-top:7px;">Phone: {{ $user->formateur['formateur_number'] }}</span>

        <span  style="margin-top:70px;">Joined {{ date('F, Y', strtotime($user->created_at)) }}</span>
      </div>
      
      
    </div>
</div>

  <div class="general">
    <h1 style="color:black;">{{ $user->name }}</h1>
    <p style="margin-left:8px;">{{ $user->formateur['formateur_description'] }}</p>
    <span class="more">Mouse over the card for more info</span>
  </div>

  </div>
  @endforeach

</div>
      
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Techie</h3>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>
      </div>

      

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container">

  <div class="copyright-wrap d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>Ahmed</span></strong>. All Rights Reserved
      </div>
      
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>

</div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
     $('.nav-bar .nav-link').click(function() {
    $('.nav-link').removeClass('active')
    $(this).closest('.nav-link').addClass('active')
  })

  </script>   
</body>

</html>