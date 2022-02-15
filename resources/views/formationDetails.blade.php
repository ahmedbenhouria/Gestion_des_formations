<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Details</title>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style2.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('../css/card.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Play&display=swap");

      html{
        font-family: "Play", sans-serif;

      }
      body{
        background-color: #ECECEC;
        font-family: "Play", sans-serif;
      }
      .title {
        font-size: 47px;
        color: white;
        font-style:700;
      }
      .text {
        margin-top:20px;
        font-size: 17px;
        color: white;
      }
    
      .card{
        position: relative;
        width:430px;
        height:480px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
      }

      .button2 {
 background: #FBCA1F;
 font-family: inherit;
 padding: 0.6em 1.8em;
 font-weight: 500;
 font-size: 16px;
 border: 1px solid black;
 border-radius: 17px;
 box-shadow: 0.1em 0.1em;
}

.button2:hover {
 transform: translate(-0.05em, -0.05em);
 box-shadow: 0.15em 0.15em;
 background: #ddb41e;

}

.button2:active {
 transform: translate(0.05em, 0.05em);
 box-shadow: 0.05em 0.05em;
}

.button1 {
 background: #979EB5;
 
 font-family: inherit;
 padding: 0.6em 1.3em;
 font-weight: 500;
 font-size: 16px;
 color:black;
 border: 1px solid black;
 border-radius: 17px;
 box-shadow: 0.1em 0.1em black;
 margin-top:100px;
 margin-left:30px;
}

.button1:hover {
 
 transform: translate(-0.05em, -0.05em);
 box-shadow: 0.15em 0.15em black;

}

.button1:active {
 transform: translate(0.05em, 0.05em);
 box-shadow: 0.05em 0.05em black;
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
    </div> <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul class="nav-bar">
          <li><a class="nav-link " href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link active" href="{{ route('formation') }}">Courses</a></li>
          <li><a  class="nav-link" href="{{ route('formation') }}">Trainers</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

  <div class="row">
  <div class="col-sm-6">
    <div style="margin-left:130px;" class="card">
      <div class="card-body">

      <p style="color: black; font-size:14px; font-weight:500; margin-left:280px;"  class="card-text"> {{ $formation->formation_time }}</p>

      <p style="color: black; font-size:16px; margin-top:0px;  font-weight:500;" >Created at</p>
        <h5 style="color: black;  font-size:18px;font-weight:600;" class="card-title">{{ $formation->created_at->format('l j F, Y')}}</h5>
       
        <p style="color: black; font-size:16px; margin-top:25px; margin-bottom:6px; font-weight:500;" >Experience</p>
        <p style="color: black; font-size:18px; font-weight:600;"  class="card-text"> {{ $formation->formation_level }}</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <div style="background-color: transparent; box-shadow:none; border:0; width:700px; margin-left:-20px; " class="card">
      <div class="card-body">
        <h5 class="title" style="font-weight:600;">{{ $formation->formation_name }}</h5>
        <p class="text" style="padding-right:20px; font-weight:300;   line-height: 28px;">{{ $formation->formation_description }}</p>
        <button   class="button2"> BEGIN SERIES
       </button>
              <button class="button1"> ADD TO WATCHLIST
       </button>
      </div>
   <div>
  </div>
</div>

  </section><!-- End Hero -->
  
  
  <section>
 
<section class="main-content">
		<div class="container">
			<h1 style="color: black;" class="text-center text-lowercase mb-5">What will you learn?</h1>
			<br>
			<br>
     
      @foreach ($formation->cours as $cours)
			<div class="row flex-center">
				<div class="col-sm-8 offset-sm-2">
					<div id="accordion">
						<div class="accordion-card">
							<div class="accordion-card__header" >
								<h5 class="mb-0">
									<div class="circle-icon">
										<i style="margin-top: 15px;color: black;"><p>{{ $cours['id'] }}</p></i>
									</div style="color: black;">
									{{ $cours['cours_name'] }}
								</h5>
							</div>
							<div >
								<div style="color: black;" class="accordion-card__body">
                {{ $cours['cours_description'] }}
              </div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
      @endforeach

		</div>
	</section>  </section>


  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
  <script type="text/javascript">
     $('.nav-bar .nav-link').click(function() {
    $('.nav-link').removeClass('active')
    $(this).closest('.nav-link').addClass('active')
  })

  </script>                                  
</body>

</html>