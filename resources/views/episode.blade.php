<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Episode</title>


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

<link href="{{ asset('../assets/css/style.css') }}" rel="stylesheet">

  <link href="../assets/css/style2.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('../css/card.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
   @font-face {
        src: url('../assets/fonts/ApercuLight.otf');
        font-family: "Apercu Light";
    }
    @font-face {
        src: url('../assets/fonts/ApercuProRegular.otf');
        font-family: "Apercu Pro Regular";
    }
      html{
        font-family: "Apercu Pro Regular", sans-serif;
      }
    
      body {
	background-color: #ECECEC;
	font-family: 'Apercu Pro Regular', sans-serif;
	

}


    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style=" background: #5e608a; padding: 10px 0;">
    <div class="container d-flex align-items-center justify-content-between">
    <div style="margin-top:10px; ">
      <h4 style=" color:white;font-weight:600; ">CNI</h4>     
      <h4 style=" margin-left:40px; margin-top:-36px; color:#FFD300;font-weight:600;  ">Courses.</h4>
    </div> <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar" style="margin-right:-80px;">
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
                                <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="/assets/avatars/{{ Auth::user()->avatar }}" style="width:40px; background: white; height:40px; margin-right:0px; border-radius:50%; ">  

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

  <section  class="d-flex align-items-center">
  <div class="container">
		
     
			<div class="row flex-center">
				<div class="col-sm-8 offset-sm-2">
					<div id="accordion">
						<div class="accordion-card">
							<div class="accordion-card__header" >
								<h5 class="mb-0">
									<div class="circle-icon">
										<i style="margin-top: 15px;color: black;"><p>{{ $cours['id'] }}   {{ $cours['cours_name'] }}</p></i>
									</div style="color: black;">
               
								</h5>
							</div>
							<div >
             
             <div class="media">
               <div class="media-body" style="border-radius:15px;">
                 <iframe width="950" height="515" src="{{ $cours->cours_video}}" frameborder="0" allowfullscreen>
                   </iframe>
        </div>
    </div>
    <br>
								<div style="color: black;" class="accordion-card__body">
                {{ $cours['cours_description'] }}
              </div>
							</div>
						</div>
						
					</div>
				</div>
			</div>

		</div>
    
   </section>
  
     
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
                  <a href="/formationDetails/{{$formation->id}}/episode/{{ $cours->id }}">	{{ $cours['cours_name'] }} </a>
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

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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