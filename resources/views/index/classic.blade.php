<!DOCTYPE html>
<html lang="en">
<head>
    
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Title -->
  <title>Cuscuz</title>
  
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  @include('components.carregaCss')

  <!-- Google Fonts -->

</head>
<body>
    {{-- @include('components.cabecalho') --}}
    @include('components.appHeader')

  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header">

  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    @yield('content')
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  {{-- <footer class="container">
    <div class="row justify-content-lg-between space-2">
      <div class="col-6 col-md-4 col-lg-3 order-lg-2 ml-lg-auto mb-7 mb-lg-0">
        <h3 class="h6 font-weight-semi-bold">Account</h3>

        <!-- List Group -->
        <ul class="list-group list-group-flush list-group-borderless mb-0">
          <li><a class="list-group-item list-group-item-action" href="#">Placing an order</a></li>
          <li><a class="list-group-item list-group-item-action" href="#">Shipping options</a></li>
          <li><a class="list-group-item list-group-item-action" href="#">Tracking a package</a></li>
          <li><a class="list-group-item list-group-item-action" href="#">Country availability</a></li>
        </ul>
        <!-- End List Group -->
      </div>

      <div class="col-6 col-md-4 col-lg-3 order-lg-3 mb-7 mb-lg-0">
        <h3 class="h6 font-weight-semi-bold">Company</h3>

        <!-- List Group -->
        <ul class="list-group list-group-flush list-group-borderless mb-0">
          <li><a class="list-group-item list-group-item-action" href="#">Financing</a></li>
          <li><a class="list-group-item list-group-item-action" href="#">Recycling</a></li>
          <li><a class="list-group-item list-group-item-action" href="#">Return policy</a></li>
        </ul>
        <!-- End List Group -->
      </div>

      <div class="col-md-4 col-lg-2 order-lg-4 mb-7 mb-lg-0">
        <h3 class="h6 font-weight-semi-bold">Our Location</h3>

        <!-- List Group -->
        <ul class="list-group list-group-flush list-group-borderless mb-0">
          <li>
            <a class="list-group-item list-group-item-action" href="../pages/help.html">
              <span class="media align-items-center">
                <span class="fas fa-info-circle mr-3"></span>
                <span class="media-body">Help</span>
              </span>
            </a>
          </li>
          <li>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="media align-items-center">
                <span class="fas fa-user-circle mr-3"></span>
                <span class="media-body">Your Account</span>
              </span>
            </a>
          </li>
          <li class="position-relative">
            <!-- Country -->
            <a id="footerCountryInvoker" class="list-group-item list-group-item-action" href="javascript:;" role="button"
               aria-controls="footer-country"
               aria-haspopup="true"
               aria-expanded="false"
               data-toggle="dropdown"
               data-unfold-event="click"
               data-unfold-target="#footer-country"
               data-unfold-type="css-animation"
               data-unfold-duration="300"
               data-unfold-delay="300"
               data-unfold-hide-on-scroll="false"
               data-unfold-animation-in="slideInUp"
               data-unfold-animation-out="fadeOut">
              <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/us.svg" alt="United States Flag">
              <span>United States</span>
            </a>

            <div id="footer-country" class="dropdown-menu dropdown-unfold dropdown-card dropdown-menu-md-right dropdown-menu-bottom" aria-labelledby="footerCountryInvoker">
              <div class="card">
                <!-- Body -->
                <div class="card-body p-5">
                  <h4 class="h6 font-weight-semi-bold">Front available in</h4>

                  <div class="row">
                    <div class="col-6">
                      <!-- List Group -->
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/au.svg" alt="Australia Flag">
                        Australia
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/at.svg" alt="Austria Flag">
                        Austria
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/be.svg" alt="Belgium Flag">
                        Belgium
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/ca.svg" alt="Canada Flag">
                        Canada
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/dk.svg" alt="Denmark Flag">
                        Denmark
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/fi.svg" alt="Finland Flag">
                        Finland
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/fr.svg" alt="France Flag">
                        France
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/de.svg" alt="Germany Flag">
                        Germany
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/nl.svg" alt="Netherlands Flag">
                        Netherlands
                      </a>
                      <!-- End List Group -->
                    </div>

                    <div class="col-6">
                      <!-- List Group -->
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/nz.svg" alt="New Zealand Flag">
                        New Zealand
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/no.svg" alt="Norway Flag">
                        Norway
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/pt.svg" alt="PortugalPREVIEW Flag">
                        Portugal
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/sg.svg" alt="Singapore Flag">
                        Singapore
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/es.svg" alt="Spain Flag">
                        Spain
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/se.svg" alt="Sweden Flag">
                        Sweden
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/ch.svg" alt="Switzerland Flag">
                        Switzerland
                      </a>
                      <a class="list-group-item list-group-item-action" href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/gb.svg" alt="United Kingdom Flag">
                        UK
                      </a>
                      <a class="list-group-item list-group-item-action active " href="#">
                        <img class="list-group-icon" src="../../assets/vendor/flag-icon-css/flags/4x3/us.svg" alt="United States Flag">
                        US
                      </a>
                      <!-- End List Group -->
                    </div>
                  </div>
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <a class="card-footer card-bg-light p-5" href="#">
                  <span class="d-block text-muted mb-1">More countries coming soon.</span>
                  <small class="d-block">Signup to get notified <span class="fas fa-arrow-right small"></span></small>
                </a>
                <!-- End Footer -->
              </div>
            </div>
            <!-- End Country -->
          </li>
        </ul>
        <!-- End List Group -->
      </div>

      <div class="col-lg-3 order-lg-1">
        <div class="d-flex align-items-start flex-column h-100">
          <!-- Logo -->
          <a class="d-flex align-items-center mb-lg-auto" href="../home/index.html" aria-label="Front">
           
            <span class="brand brand-primary">Front</span>
          </a>
          <!-- End Logo -->

          <!-- Copyright -->
          <p class="small text-muted mb-0">&copy; Front. 2018 Htmlstream.</p>
          <!-- End Copyright -->
        </div>
      </div>
    </div>

    <hr class="my-0">

    <div class="row align-items-md-center space-1">
      <div class="col-md-4 mb-4 mb-lg-0">
        <!-- Social Networks -->
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
              <span class="fab fa-facebook-f btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
              <span class="fab fa-google btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
              <span class="fab fa-twitter btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
              <span class="fab fa-github btn-icon__inner"></span>
            </a>
          </li>
        </ul>
        <!-- End Social Networks -->
      </div>

      <div class="col-md-8 text-md-right">
        <!-- Links -->
        <ul class="list-inline list-group-flush list-group-borderless mb-0">
          <li class="list-inline-item pl-3">
            <a class="list-group-item-action font-size-1" href="../pages/privacy.html">Privacy &amp; policy</a>
          </li>
          <li class="list-inline-item pl-3">
            <a class="list-group-item-action font-size-1" href="../pages/terms.html">Terms &amp; conditions</a>
          </li>
          <li class="list-inline-item pl-3">
            <a class="list-group-item-action font-size-1" href="../pages/careers.html">Careers</a>
          </li>
        </ul>
        <!-- End Links -->
      </div>
    </div>
  </footer> --}}
  <!-- ========== END FOOTER ========== -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#signupPassword'
          }
        }
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>