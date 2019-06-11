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
  <!-- CSS Implementing Plugins -->
  @include('components.carregaCssPadrao')
  <!-- CSS Front Template -->
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header">
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Content Section -->
    <div class="bg-light">
      <div class="container space-2">
          <form id="changePasswordForm" class="js-validate" method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
          <!-- Input -->
          <div class="js-form-message mb-6">
            <label for="email" class="form-label">
              Email
            </label>

            <div class="form-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email" 
                aria-label="Entre com seu email"
                data-msg="Email não existe em base de dados."
                data-error-class="u-has-error"
                data-success-class="u-has-success">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="mb-6">
            <div class="js-form-message">
              <label for="password" class="form-label">
                Informe a nova senha
              </label>
              <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                placeholder="Digite a senha" aria-label="Digite a senha" required autocomplete="new-password"
                data-msg="Campo Obrigatório."
                data-error-class="u-has-error"
                data-success-class="u-has-success"
                data-pwstrength-container="#changePasswordForm"
                data-pwstrength-progress="#passwordStrengthProgress"
                data-pwstrength-verdict="#passwordStrengthVerdict"
                data-pwstrength-progress-extra-classes="bg-white height-4">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-6">
            <label for="password-confirm" class="form-label">
              Confirme a nova senha
            </label>

            <div class="form-group">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme sua senha" 
              aria-label="Confirme sua senha" required autocomplete="new-password"
              data-msg="Senhas não coincidem."
              data-error-class="u-has-error"
              data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="w-lg-50">
            <!-- Password Strength -->
            <div class="mb-6">
              <div class="d-flex justify-content-between mb-2">
                <h3 class="h6">Força da senha:</h3>
                <span id="passwordStrengthVerdict"></span>
              </div>

              <div id="passwordStrengthProgress" class="mb-2"></div>

              <p class="small">A senhas devem conter entre no mínimo 8 a 20 caracteres.</p>
            </div>
            <!-- End Password Strength -->
            <!-- Buttons -->
            <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">Salvar</button>
            {{-- <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover">Cancelar</button> --}}
            <!-- End Buttons -->
          </div>
        </form>
      </div>
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <footer>
    <!-- Copyright -->
    <div class="container text-center space-1">
      <!-- Logo -->
      <a class="d-inline-flex align-items-center mb-2" href="../home/index.html" aria-label="Front">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="36px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
          <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
          <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
          <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
          <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"/>
        </svg>
        <span class="brand brand-primary">Front</span>
      </a>
      <!-- End Logo -->
      <p class="small text-muted">&copy; Um sistema de delivery desenvolvido por alunos da Unifacs.</p>
    </div>
    <!-- End Copyright -->
  </footer>
  <!-- ========== END FOOTER ========== -->

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

  {{-- JS --}}
  @include('components.carregaJSResetPassToken');

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

      // initialization of HSMegaMenu component
      $('.js-breadcrumb-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991.98,
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

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-modal-window', {
        autonomous: true
      });

      // initialization of password strength module
      $.HSCore.components.HSPasswordStrength.init('#newPassword');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>