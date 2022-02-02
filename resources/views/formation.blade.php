<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Formations</title>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/card.css') }}">
  <style>
    *::before,
*::after{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

img{
    width: 100%;
}
.body1{
  width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #eee;
    padding: 0 1.5rem;
    margin-bottom:-350px;

}
.blog-post{
   width: 100%;
   max-width: 58rem;
   height: 300px;
   padding: 5rem;
   background-color: #fff;
   box-shadow: 0 1.4rem 8rem rgba(0,0,0,.2);
   display: flex;
   align-items: center;
   border-radius: .8rem;

}
.blog-post_img{
   min-width: 25rem;
   max-width: 25rem;
   height: 15rem;
   transform: translateX(-8rem);
   position: relative;
}
.blog-post_img img{
   width: 100%;
   height: 100%;
   object-fit: cover;
   display:block;
   border-radius: .8rem;

}
.blog-post_img: :before{
   content: '';
   width: 100%;
   height: 100%;
   position: absolute;
   top: 0;
   left: 0;
   background: linear-gradient(to right, rgba(79, 172, 254, .8),  rgba(0, 242, 254, .8));
   box-shadow: .5rem .5rem 3rem 1px rgba(0,0,0,.05);
   border-radius: .8rem;
}
.blog-post_date span{
   display: block;
   color: rgba(0,0,0,.5);
   font-size: 1.6rem;
   font-weight: 600;
   margin: .5rem 0;
}
.blog-post_title{
   font-size: 2.5rem;
   margin: 1.5rem e 2rem;
   text-transform: uppercase;
   color: #4facfe;
}
.blog-post_text{
   margin-bottom: 3rem;
   font-size: 1.4rem;
   color: rgba(0,0,0,.7);
}
.blog-post_cta{
   display: inline-block;
   padding: 1.5rem 3rem;
   letter-spacing: 1px;
   text-transform: uppercase;
   font-size: 1.2rem;
   color: #fff;
   background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
   border-radius: .8rem;
   text-decoration: none;
}
.blog-post_cta:hover{
   background-image: linear-gradient(to right, #0012fe 0%, #4facfe 100%);
}
@media screen and (max-width: 1068px) {
   .blog-post{
       max-width: 40rem;
   }
   .blog-post_img{
       min-width: 10rem;
       max-width: 10rem;
   }
  }
@media screen and (max-width: 868px) {
   .blog-post{
       padding: 2.5rem;
   }
   .blog-post_img{
     margin-top:220px;
     margin-left:-50px;
     padding-right:20px;
    width: 100px;
   height: 180px;
   position: center;
       min-width: 15rem;
       max-width: 15rem;
       transform: translate(0, -8rem);

   }
  }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <img src="assets/img/logo.png" alt="" style="width:40px; height:50px; ">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul class="nav-bar">
          <li><a class="nav-link " href="{{ route('home') }}">Accueil</a></li>
          <li><a class="nav-link " href="#about">À propos</a></li>
          <li><a class="nav-link active " href="{{ route('formation') }}">Formations</a></li>
          <li><a class="nav-link  " href="#formateurs">Formateurs</a></li>
          <ul class="nav-link " style ="margin-left:30px;">
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Apprendre sans limites</h1>
          <h2>Découvrez nos différents cours et formations en ligne gratuits, pour élargir vos connaissances ou pour acquérir de nouvelles compétences qui vous aideront à progresser dans votre carrière professionnelle.</h2>
          <div><a href="#about" class="btn-get-started scrollto">Rejoignez gratuitement</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="" style="margin-left: 80px;">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  @foreach ($formation as $formation)

<section class="body1">
  <main id="main">

    <!-- ======= About Section ======= -->
    <div class="blog-post">

   <div class="blog-post_img">
      <img src="assets/img/about.jpg" alt="">
   </div>
   <div  class="blog-post_info">
     
      <div class="blog-post_date">
         <span style="font-size:10px;">Sunday</span>
         <span style="font-size:10px;">{{ $formation['created_at'] }}</span>
      </div>
      <h1 style="font-size:15px;" class="blog-post_title">{{ $formation['formation_name'] }}</hl>
      <p style="font-size:12px;" class="blog-post_text">
      {{ $formation['formation_description'] }}
      </p>
      <a href="#" class="blog-post_cta">Read more</a>
   </div>

</div>

</section>
@endforeach


  


      

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