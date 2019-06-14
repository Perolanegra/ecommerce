<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Resetar Senha</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  @include('components.carregaCssPadrao')
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--bg-transparent u-header--abs-top">
    <div class="u-header__section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="navbar navbar-expand u-header__navbar">
          <!-- White Logo -->
          <a class="d-none d-lg-flex navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white" href="{{url('/')}}" aria-label="Cuscuz">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#E1E4EA" opacity=".65" d="M23,41.1L23,41.1c-9.9,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6v11.4C41,33,32.9,41.1,23,41.1z"/>
              <path class="fill-white" opacity=".5" d="M28,36L28,36c-9.9,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3C43,0.1,46,3.1,46,6.7v11.4C46,28,38,36,28,36z"/>
              <path class="fill-white" opacity=".7" d="M18,46.1L18,46.1c-10,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6v11.4C35.9,38.1,27.9,46.1,18,46.1z"/>
              <path class="fill-primary" d="M17.4,34.1V18.4h10.2v2.9h-6.4v3.4H26v2.9h-4.8v6.5H17.4z"/>
            </svg>
            <span class="u-header__navbar-brand-text">Front</span>
          </a>
          <!-- End White Logo -->

          <!-- Default Logo -->
          <a class="d-flex d-lg-none navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-collapsed" href="index.html" aria-label="Front">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
              <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
              <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
              <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"/>
            </svg>
            <span class="d-inline-block u-header__navbar-brand-text">Front</span>
          </a>
          <!-- End Default Logo -->

          <!-- Button -->
        @if (Route::has('register'))
        <div class="ml-auto">
            <a class="btn btn-sm btn-primary transition-3d-hover" href="{{ route('register') }}" > <!--target="_blank"-->
            Registrar
            </a>
        </div>
        @endif
          <!-- End Button -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative height-lg-100vh">
      <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center gradient-half-primary-v1 height-lg-100vh px-0">
        <div class="w-100 p-5">
          <!-- SVG Quote -->
          <figure class="text-center mb-5 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
               viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
              <path class="fill-white" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
            </svg>
          </figure>
          <!-- End SVG Quote -->

          <!-- Testimonials Carousel Main -->
          <div id="testimonialsNavMain" class="js-slick-carousel u-slick mb-4"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-fade="true"
               data-nav-for="#testimonialsNavPagination">
            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">The template is really nice and offers quite a large set of options. Thank you!</blockquote>
                <h1 class="h6 text-white-70">Maria Muszynska, Google</h1>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">It's beautiful and the coding is done quickly and seamlessly. Keep it up!</blockquote>
                <h2 class="h6 text-white-70">James Austin, Slack</h2>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">I love Front! I love the ease of use, I love the fact that I have total creative freedom...</blockquote>
                <h3 class="h6 text-white-70">Charlotte Moore, Amazon</h3>
              </div>
              <!-- End Testimonials -->
            </div>
          </div>
          <!-- End Testimonials Carousel Main -->

          <!-- Testimonials Carousel Pagination -->
          <div id="testimonialsNavPagination" class="js-slick-carousel u-slick u-slick--transform-off u-slick--pagination-modern u-slick--transform-off mx-auto"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-center-mode="true"
               data-slides-show="3"
               data-is-thumbs="true"
               data-focus-on-select="true"
               data-nav-for="#testimonialsNavMain">
            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
              </div>
            </div>

            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
              </div>
            </div>

            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img2.jpg" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Testimonials Carousel Pagination -->

          <!-- Clients -->
          <div class="position-absolute right-0 bottom-0 left-0 text-center p-5">
            <h4 class="h6 text-white-70 mb-3">Front partners</h4>
            <div class="d-flex justify-content-center">
              <div class="mx-4">
                <img class="u-clients" src="../../assets/svg/clients-logo/slack-white.svg" alt="Image Description">
              </div>
              <div class="mx-4">
                <img class="u-clients" src="../../assets/svg/clients-logo/google-white.svg" alt="Image Description">
              </div>
              <div class="mx-4">
                <img class="u-clients" src="../../assets/svg/clients-logo/spotify-white.svg" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Clients -->
        </div>
      </div>

      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-3 space-lg-0">
            <!-- Form -->
            <form class="js-validate mt-5" method="POST" action="{{ route('password.email') }}">
                @csrf
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

              <!-- Title -->
              <div class="mb-7">
                <h1 class="h3 text-primary font-weight-normal mb-0">Esqueceu sua <span class="font-weight-semi-bold">senha?</span></h1>
                <p>Entre com seu email abaixo e enviaremos um link para alteração da senha.</p>
              </div>
              <!-- End Title -->

              <!-- Form Group -->
              <div class="js-form-message form-group">

                <label class="form-label" for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" aria-label="Email"
                data-msg="Por favor insira um email válido."
                data-error-class="u-has-error"
                data-success-class="u-has-success">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Button -->
              <div class="row align-items-center mb-5">
                <div class="col-4 col-sm-6">
                  <a class="small link-muted" href="{{route('authenticate')}}">Voltar para Login</a>
                </div>

                <div class="col-8 col-sm-6 text-right">
                  <button type="submit" class="btn btn-primary transition-3d-hover">Enviar Email</button>
                </div>
              </div>
              <!-- End Button -->
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN ========== -->

@include('components.carregaJS')

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');
    });
  </script>
</body>
</html>
