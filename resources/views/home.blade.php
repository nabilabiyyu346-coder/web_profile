@php
    $site_name = get_setting_value('site_name');
    $jumbotron = get_section_data('profile');
    $address = get_setting_value('address');
    $phone = get_setting_value('phone');
    $email = get_setting_value('email');
    $github = get_setting_value('github');
    $site_description = get_setting_value('site_description');
    $about = get_section_data('abbout');
    $portofolio = get_portofolio();
    $cv = get_setting_value('cv');
@endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $site_name }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">{{ $site_name }}</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#partner">Portofolio</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About Me</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#profile">My Contact</a></li>

            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-warning" href="/admin" target="_blank">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5 rounded-circle" src="{{ Storage::url($jumbotron->thumbnail) }}" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">{{$jumbotron->title}}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">{!! strip_tags($jumbotron->content) !!}</p>
      </div>
    </header>
    <!-- Partner Section-->
    <section class="page-section portfolio" id="partner">
      <div class="container">
        <!-- Partner Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portofolio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Partner Grid Items-->
        <div class="row justify-content-center">
          @php
              $i = 1;
          @endphp
          @foreach ($portofolio as $item)
          <!-- Partner Item -->
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $i }}">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid border" src="{{ Storage::url($item->thumbnail) }}" alt="..." />
            </div>
          </div>

          @php
              $i++;
          @endphp
          <!-- last partner -->
          @endforeach
          
        </div>
      </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-3 ms-auto text-center"><img src="assets/img/about.png" class="w-75" /></div>
          <div class="col-lg-5 me-auto lead">
            {!! $about->content!!}
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center" id="profile">
      <div class="container">
        <div class="row">
          <!-- Footer Location-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">My Address</h4>
            <p class="lead mb-0">
              {{$address}}
            </p>
          </div>
          <!-- Footer My Contact-->
          <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">My Contact</h4>
                <div class="d-flex flex-column align-items-center">
                    <a class="text-light mb-2" href="tel:{{ $phone }}">
                        <i class="fas fa-phone-alt me-2"></i> {{ $phone }}
                    </a>
                    <a class="text-light mb-2" href="mailto:{{ $email }}">
                        <i class="fas fa-envelope me-2"></i> {{ $email }}
                    </a>
                    <a class="text-light mb-2" href="{{ $github }}" target="_blank">
                        <i class="fab fa-github me-2"></i> {{$github}}
                    </a>
                </div>
            </div>
          <!-- Footer About Text-->
          <div class="col-lg-4">
            <h4 class="text-uppercase mb-4">MY CV</h4>
            <p class="lead mb-0">
                <a class="text-light mb-2" href="{{ Storage::url($cv) }}" target="_blank">
                  <i class="fas fa-file-pdf me-2"></i> Download CV
                </a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright &copy; {{ $site_name }} 2026</small></div>
    </div>
    <!-- Partner Modals-->
    @php
    $i = 1;
    @endphp

    @foreach ($portofolio as $item)
  <!-- Partner Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $i }}" tabindex="-1" aria-labelledby="portfolioModal{{ $i }}" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Partner Modal - Title-->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{$item->title}}</h2>
                  <!-- Icon Divider-->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Partner Modal - Image-->
                  <img class="img-fluid rounded mb-5" src="{{ Storage::url($item->thumbnail) }}" alt="..." />
                  <!-- Partner Modal - Text-->
                  {!! $item->content !!}
                  <button class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fas fa-xmark fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @php
        $i++;
    @endphp
    @endforeach
    

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
