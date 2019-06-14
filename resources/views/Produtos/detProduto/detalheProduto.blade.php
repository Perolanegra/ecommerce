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
    {{-- @include('components.alert-success',['content' => collect(['id' => 'alert-suc','text' => 'Produto adicionado ao carrinho com sucesso!'])]) --}}
    @include('components.alert-success')
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
                <img class="img-fluid" src="/assets/img/{{$item['foto']}}" alt="Image Description">
              </div>
              <div class="js-slide px-7 my-4">
                <img class="img-fluid" src="/assets/img/{{$item['foto']}}" alt="Image Description">
              </div>
              <div class="js-slide px-7 my-4">
                <img class="img-fluid" src="/assets/img/{{$item['foto']}}" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Item Image -->
          <!-- Content -->
          <div class="col-md-5">
            <div class="mb-5">
              <h1 class="text-white font-weight-normal">{{@$item['nome']}}</h1>
              <span id="valor-default" class="d-block h3 text-white mb-3">R$ {{@$precos->implode('valor_pequeno')}},00</span>
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

                  <input type="hidden" name="1" id="preco_sm" ref="{{json_encode(@$precos->implode('valor_pequeno'))}}">
                  <input type="hidden" name="2" id="preco_md" ref="{{json_encode(@$precos->implode('valor_medio'))}}">
                  <input type="hidden" name="3" id="preco_lg" ref="{{json_encode(@$precos->implode('valor_grande'))}}">

                  <select id="hasValue" name="hasValue" class="custom-select">
                    <option value="0" selected>Selecione</option>
                    <option value="1">Pequeno - R$ {{@$precos->implode('valor_pequeno')}},00</option>
                    <option value="2">Médio - R$ {{@$precos->implode('valor_medio')}},00</option>
                    <option value="3">Grande - R$ {{@$precos->implode('valor_grande')}},00</option>
                  </select>

                  <td class="align-middle">
                    <div class="js-quantity input-group u-quantity">
                      <input id="{{@$item['id']}}" class="js-result form-control u-quantity__input input-qtd" type="text" value="1">
                      <div class="u-quantity__arrows">
                      <span onclick="addQtd({{json_encode(@$item['id'])}})" class="js-plus u-quantity__arrows-inner fas fa-angle-up"></span>
                      <span onclick="rmQtd({{json_encode(@$item['id'])}})" class="js-minus u-quantity__arrows-inner fas fa-angle-down"></span>
                      </div>
                    </div>
                  </td>
            </div>
            <!-- End Size Custom Select -->

            <a id="addToCart" ref="{{json_encode($item)}}" class="btn btn-soft-white transition-3d-hover disabled" href="#">
              <span class="fas fa-cart-arrow-down mr-2"></span>
              Adicionar ao carrinho
            </a>
          </div>
          <!-- End Content -->
        </div>
      </div>
    </div>
    
    <div style="margin-top:50px;" id="SVGsubscribe" class="svg-preloader overflow-hidden">
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

    function addQtd(id) {
      var input = document.getElementById(JSON.parse(id).toString());
      var old_value = parseInt(input.value);
      var new_value = old_value + 1;
      input.value = new_value;
      var select_option = $('#hasValue').val();

      if(select_option != '0') {
        preco_selecionado = JSON.parse(document.getElementsByName(select_option)[0].getAttribute('ref'));
        result = preco_selecionado * new_value;
        preco_title = `R$ ${result},00`; // não deu tempo de tratar caso venha float...
        $('#valor-default').html(preco_title);
        $('#valor-default').val(result);
      }
    }

    function rmQtd(id) {
      var input = document.getElementById(JSON.parse(id).toString());
      var old_value = parseInt(input.value);
      if(old_value > 0) {
        var new_value = old_value - 1;
        input.value = new_value;

        var select_option = $('#hasValue').val();

        if(select_option != '0' && new_value > 0) {
          preco_selecionado = JSON.parse(document.getElementsByName(select_option)[0].getAttribute('ref'));
          result = preco_selecionado * new_value;
          preco_title = `R$ ${result},00`; // não deu tempo de tratar caso venha float...
          $('#valor-default').html(preco_title);
          $('#valor-default').val(result);
        }
      }
    }

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
      $('.input-qtd').val(1);
      var select_option = $('#hasValue').val();
      const choice = parseInt(select_option);
            
      switch ($('[name=hasValue]').val()) {
          case '0':
            $('#addToCart').addClass('disabled');
            break;

          default:
            $('#addToCart').removeClass('disabled');
            break;
      }

      switch (choice) {
        case 1:
          precoDefault = `R$ ${JSON.parse(document.getElementById('preco_sm').getAttribute('ref'))},00`;
          $('#valor-default').html(precoDefault);
          break;
        
        case 2:
          precoDefault = `R$ ${JSON.parse(document.getElementById('preco_md').getAttribute('ref'))},00`;
          $('#valor-default').html(precoDefault);
          break;

        case 3: 
          precoDefault = `R$ ${JSON.parse(document.getElementById('preco_lg').getAttribute('ref'))},00`;
          $('#valor-default').html(precoDefault);
          break;

        default:
          break;
      }
    });

    $('#addToCart').click(function(e) {
        let item = JSON.parse(e.currentTarget.getAttribute('ref'));
        $('#addToCart').addClass('disabled');
        $('#hasValue').addClass('disabled');
        
        verifyAuth(item);
    });

    $('#alert-suc').find('.close-alert').click(function(e) {
      $('#alert-suc').removeClass('active');
    });

    function verifyAuth(item) {
      var tamanho_option = $('#hasValue').val();
      const opt = parseInt(tamanho_option);
            
      switch (opt) {
        case 1:
          item.preco = JSON.parse(document.getElementById('preco_sm').getAttribute('ref'));
          break;
        
        case 2:
          item.preco = JSON.parse(document.getElementById('preco_md').getAttribute('ref'));
          break;

        case 3: 
          item.preco = JSON.parse(document.getElementById('preco_lg').getAttribute('ref'))
          break;

        default:
          return;
      }
      item.quantidade = $('.input-qtd').val();
      
      $.ajax({
        type: 'GET',
        url: '{{route("produto.verify")}}', 
        data: {item:item},
        success: function(result) {
          
          if(!result.success) {
              window.location = result.rota;
              return;
          }
          $('#alert-suc').addClass('active');
            window.location = result.rota;
          // $(document.body).html(result);
        }
      });
    }

    


    });
  </script>
</body>
</html>
@endsection