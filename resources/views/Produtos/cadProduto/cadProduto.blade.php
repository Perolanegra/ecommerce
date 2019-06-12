@extends('index.classic')

@section('content')
  <title>Cadastro de Produto'</title>

    <div class="container space-2">

      <div class="row">

        <div class="col-lg-8 order-lg-1">
            <form method="POST" action="{{ route('produto.store') }}" enctype="multipart/form-data">
                @csrf
            <!-- Title -->
            <div class="mb-4">
              <h2 class="h5">Cadastro de produtos</h2>
            </div>
            <!-- End Title -->

            <!-- Billing Form -->
            <div class="row mb-10">
              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="form-label" for="id_categoria">
                    Categoria:
                    <span class="text-danger">*</span>
                  </label>

                  <input type="text" class="form-control" name="id_categoria" placeholder="Categoria do Produto" aria-label="Categoria do Produto" required
                         data-msg="Insira a categoria do produto"
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
                <!-- End Input -->
              </div>

              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="form-label" for="nome">
                    Nome: 
                    <span class="text-danger">*</span>
                  </label>

                  <input type="text" class="form-control" name="nome" placeholder="Nome do produto" aria-label="Nome do produto" required
                         data-msg="Digite o nome do produto."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
                <!-- End Input -->
              </div>

              <div class="w-100"></div>

              <div class="col-md-8">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="form-label" for="image">
                    Selecione a Foto:
                  </label>

                  <input type="file" class="form-control" placeholder="Selecione a foto do produto" aria-label="Selecione a foto do produto"
                         required name="image"
                         data-msg="Selecione uma foto para o produto."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
                <!-- End Input -->
              </div>

              <div class="w-100"></div>

              <div class="col-md-8">
                <!-- Input -->
                <div class="js-form-message mb-6">
                    <label class="form-label" for="descricao">
                        Descrição:
                    <span class="text-danger">*</span>
                    </label>

                    <input type="text" class="form-control" name="descricao" placeholder="Descrição do produto" aria-label="Descrição do produto" required
                            data-msg="Insira a descrição do produto."
                            data-error-class="u-has-error"
                            data-success-class="u-has-success">
                </div>
                <!-- End Input -->
              </div>
              <div class="col-md-4"></div>

              <div class="col-md-4">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="form-label" for="valor_pequeno">
                    Preço Pequeno:
                  </label>

                  <input type="number" class="form-control" placeholder="Preço do produto pequeno" aria-label="Preço do produto pequeno" required
                         name="valor_pequeno"
                         data-msg="Insira um preço válido."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
                <!-- End Input -->
              </div>

              <div class="col-md-4">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="form-label" for="valor_medio">
                    Preço Médio:
                    <span class="text-danger">*</span>
                  </label>
                  
                  <input type="number" class="form-control" name="valor_medio" placeholder="Preço do produto médio" aria-label="Preço do produto médio" required
                         data-msg="Insira um preço válido."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
                <!-- End Input -->
              </div>

              <div class="col-md-4">
                    <!-- Input -->
                    <div class="js-form-message mb-6">
                      <label class="form-label" for="valor_grande">
                            Preço Grande:
                        <span class="text-danger">*</span>
                      </label>
                      
                      <input type="number" class="form-control" name="valor_grande" placeholder="Preço do produto grande" aria-label="Preço do produto grande" required
                             data-msg="Insira um preço válido."
                             data-error-class="u-has-error"
                             data-success-class="u-has-success">
                    </div>
                    <!-- End Input -->
                  </div>
                  <div class="col-6 offset-md-6 text-right">
                    <button type="submit" class="btn btn-primary transition-3d-hover">Cadastrar Produto</button>
                  </div>

              <div class="w-100"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End Checkout Section -->

    <hr class="my-0">

@include('components.carregaJS')

  <!-- JS Plugins Init. -->
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