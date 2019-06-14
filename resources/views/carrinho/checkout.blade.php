@extends('index.classic')

@include('components.carregaCssPadrao')
<title>Checkout</title>

   @section('content')
   <div class="container space-2" style="padding-top: 2rem !important">
       {{-- {{dd($produtos, $valor_total)}} --}}
        <div class="row">
          <div class="offset-lg-4 col-lg-4 order-lg-2 mb-9 mb-lg-0">
            <!-- Title -->
            <div class="mb-4">
              <h2 class="h5">Sumário de Compra</h2>
            </div>
            <!-- End Title -->
  
            <!-- Order Summary -->
            <div class="card shadow-sm">
              <div class="card-body p-5">


                <!-- Product -->
                @foreach ($produtos as $item)
                <div class="media align-items-center mb-5">
                  <div class="u-avatar position-relative mr-3">
                    <img class="img-fluid rounded" src="/assets/img/{{@$item['foto']}}" alt="Image Description">
                    <span class="badge badge-sm badge-primary badge-pos rounded-circle">1</span>
                  </div>
                  <div class="media-body">
                    <h2 class="h6 mb-0">{{@$item['nome']}}</h2>
                    <small class="d-block text-secondary">{{@$item['id_categoria'] == 1 ? "Fitness" : (@$item['id_categoria'] == 2 ? "Especial" : "Tradicional" )}}</small>
                  </div>
                  <div class="media-body text-right">
                  <span>R$ {{@$item['preco_real']}},00</span>
                  </div>
                </div>
                @endforeach
                <!-- End Product -->
  
                <hr class="my-5">
  
                <!-- form aqui -->
                <form class="js-validate">
                  <label class="sr-only" for="discountSrEmail">Cupom Desconto</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="name" id="discountSrEmail" placeholder="Cupom" aria-label="Discount" aria-describedby="discountEmailButton">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary" id="discountEmailButton">Aplicar</button>
                    </div>
                  </div>
                </form>
                <!-- End Input -->
  
                <hr class="my-5">
  
                <!-- Total -->
                <div class="media align-items-center">
                  <h3 class="h6 text-secondary mr-3">Subtotal</h3>
                  <div class="media-body text-right">
                    <span>R$ {{@$valor_total}},00</span>
                  </div>
                </div>
  
                <div class="media align-items-center">
                  <h3 class="h6 text-secondary mr-3">Frete</h3>
                  <div class="media-body text-right">
                    <span>R$ 5,00</span>
                  </div>
                </div>
                <!-- End Total -->
  
                <hr class="my-5">
  
                <!-- Total -->
                <div class="media align-items-center">
                  <h3 class="h6 text-secondary mr-3">Total</h3>
                  <div class="media-body text-right" style="text-align: center !important;">
                    <span class="font-weight-semi-bold">R$ {{@$valor_total + 5}},00</span>
                  </div>
                  <a id="btn-checkout" class="btn btn-primary transition-3d-hover" href="#">Comprar</a>
                </div>
                {{-- <div class="offset-md-10">
                  <div class="media-body">
                    
                  </div>
                </div> --}}
                <!-- End Total -->
              </div>
            </div>
            <!-- End Order Summary -->
          </div>
  
        </div>
      </div>
       
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
  <!-- End Go to Top -->

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

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
   @endsection
