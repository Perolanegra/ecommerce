@extends('index.classic')

@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Detalhe do Produto</title>

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
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="gradient-half-warning-v3">
      <div class="container space-2">
        <div class="row justify-content-md-between">
          <!-- Item Image -->
          <div class="col-md-6 mb-7 mb-md-0">
            <div class="js-slick-carousel u-slick"
                 data-infinite="true"
                 data-arrows-classes="u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                 data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                 data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                 data-pagi-classes="text-center u-slick__pagination u-slick__pagination--white mt-7 mb-0">
              <div class="js-slide px-7 my-4">
                <img class="img-fluid" src="/assets/img/mockups/img6.png" alt="Image Description">
              </div>
              <div class="js-slide px-7 my-4">
                <img class="img-fluid" src="/assets/img/mockups/img7.png" alt="Image Description">
              </div>
              <div class="js-slide px-7 my-4">
                <img class="img-fluid" src="/assets/img/mockups/img1.png" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Item Image -->
          <!-- Content -->
          <div class="col-md-5">
            <div class="mb-5">
              <h1 class="text-white font-weight-normal">{{@$item['nome']}}</h1>
              <span class="d-block h3 text-white mb-3">R$ {{@$precos->implode('valor_pequeno')}},00</span>
            <p class="text-white">{{@$item['descricao']}}</p>
            </div>

            <!-- Size Custom Select -->
            <div class="w-lg-75 mb-5">
              <div class="d-flex justify-content-between">
                <label class="h6 small d-block text-uppercase text-white">
                  Escolha seu tamanho
                </label>
                <a class="h6 small d-block text-uppercase text-light" href="#shoppingCartModal" role="button"
                   data-modal-target="#shoppingCartModal"
                   data-overlay-color="#111722">
                  Tamanhos
                </a>
              </div>


                  <select id="hasValue" name="hasValue" class="custom-select">
                    <option value="0" selected>Selecione</option>
                    <option value="1">Pequeno - R$ {{@$precos->implode('valor_pequeno')}},00</option>
                    <option value="2">Médio - R$ {{@$precos->implode('valor_medio')}},00</option>
                    <option value="3">Grande - R$ {{@$precos->implode('valor_grande')}},00</option>
                  </select>
            </div>
            <!-- End Size Custom Select -->

            <a id="addToCart" class="btn btn-soft-white transition-3d-hover disabled" href="#">
              <span class="fas fa-cart-arrow-down mr-2"></span>
              Adicionar ao carrinho
            </a>
          </div>
          <!-- End Content -->
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <hr class="my-0">

    <!-- Subscribe Section -->
    <div id="SVGsubscribe" class="svg-preloader overflow-hidden">
      <div class="position-relative gradient-half-primary-v1 overflow-hidden space-top-2 space-bottom-3 space-top-md-3 space-bottom-md-4">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-6 offset-xl-2">
              <!-- Title -->
              <div class="text-center mb-4">
                <span class="btn btn-xs btn-soft-white btn-pill mb-2">Subscribe</span>
                <h2 class="h1 text-white"><span class="font-weight-semi-bold">Stay</span> in the know</h2>
                <p class="lead text-white-70">Get special offers on the latest developments from Front.</p>
              </div>
              <!-- End Title -->

              <!-- Subscribe Form -->
              <form class="js-validate js-form-message">
                <label class="sr-only" for="subscribeSrEmail">Enter your email address</label>
                <div class="input-group input-group-lg input-group-borderless">
                  <input type="email" class="form-control" name="email" id="subscribeSrEmail" placeholder="Enter your email address" aria-label="Enter your email address" aria-describedby="subscribeButton" required
                         data-msg="Please enter a valid email address.">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-warning btn-wide" id="subscribeButton">Join Front</button>
                  </div>
                </div>
              </form>
              <!-- End Subscribe Form -->

              <!-- Info -->
              <div class="d-block d-xl-none">
                <small class="form-text text-white-70 mb-0">Be the lucky user to earn <span class="text-white font-weight-semi-bold">$1000</span> bonus now!</small>
              </div>
              <!-- End Info -->
            </div>

            <div class="col-xl-2 d-none d-xl-inline-block mt-auto mb-7">
              <div class="position-relative p-3">
                <p class="small text-white-70 mb-0">Be the lucky user to earn <span class="text-white font-weight-semi-bold">$1000</span> bonus now!</p>

                <!-- SVG Shape -->
                <figure class="position-absolute top-0 right-0 left-0">
                  <img class="js-svg-injector" src="../../assets/svg/components/comment.svg" alt="Image Description"
                       data-parent="#SVGsubscribe">
                </figure>
                <!-- End SVG Shape -->
              </div>
            </div>
          </div>
        </div>

        <!-- SVG Phone Mockup -->
        <div class="d-none d-lg-block u-devices-v2__phone u-devices-v2__phone--left-position">
          <figure class="w-75 u-devices-v2__phone-svg ie-devices-v2-iphone">
            <img class="js-svg-injector" src="../../assets/svg/components/iphone.svg" alt="Image Description"
                 data-img-paths='[
                   {"targetId": "#SVGiphoneImg1", "newPath": "../../assets/img/282x500/img3.jpg"}
                 ]'
                 data-parent="#SVGsubscribe">
          </figure>
        </div>
        <!-- End SVG Phone Mockup -->
      </div>

      <!-- SVG Background -->
      <figure class="position-absolute right-0 bottom-0 left-0 z-index-2">
        <img class="js-svg-injector" src="../../assets/svg/components/wave-1-bottom-sm.svg" alt="Image Description"
             data-parent="#SVGsubscribe">
      </figure>
      <!-- End SVG Background Section -->
    </div>
    <!-- End Subscribe Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- Shopping Cart Modal Window -->
  <div id="shoppingCartModal" class="js-modal-window u-modal-window">
    <div class="card">
      <!-- Header -->
      <header class="card-header bg-light py-3 px-5">
        <div class="d-flex justify-content-between align-items-center">
          <h3 class="h6 mb-0">Tamanhos</h3>

          <button type="button" class="close" aria-label="Close" onclick="Custombox.modal.close();">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </header>
      <!-- End Header -->

      <!-- Body -->
      <div class="card-body p-5">
        <table class="table table-bordered table-striped mb-0">
          <thead>
            <tr>
              <th>Tamanho</th>
              <th>Quantidade (ML)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pequeno</td>
              <td>250</td>
            </tr>
            <tr>
              <td>Médio</td>
              <td>500</td>
            </tr>
            <tr>
              <td>Grande</td>
              <td>1000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End Body -->
    </div>
  </div>
  <!-- End Shopping Cart Modal Window -->

  <!-- Account Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-header-sidebar__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center pt-4 px-7">
            <button type="button" class="close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

        </div>

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="../pages/help.html">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0">
            <img class="js-svg-injector" src="../../assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description"
                   data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  
  @include('components.carregaJS')

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

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-modal-window', {
        autonomous: true
      });

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');

    document.querySelector('select#hasValue').addEventListener('change', function(event) {
        switch ($('[name=hasValue]').val()) {
            case '0':
                $('#addToCart').addClass('disabled');
                break;

            default:
                $('#addToCart').removeClass('disabled');
                break;
        }
    });

    $('#addToCart').click(function(e) {
        $('#addToCart').addClass('disabled');
    });


    });
  </script>
</body>
</html>
@endsection