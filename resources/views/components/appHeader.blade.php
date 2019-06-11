<header id="header" class="u-header">
    
        <div class="u-header__section">
          <!-- Topbar -->
          <div class="container u-header__hide-content pt-2">
            <div class="d-flex align-items-center">
            
              <div class="ml-auto">

                  @if(@Auth::user()->id_nivel == 1)
                  <div class="d-none d-sm-inline-block ml-sm-auto">
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-0">
                          <a class="u-header__navbar-link" href="{{route('cadastrar.produto')}}">Cadastrar Produtos</a>
                        </li>
                      </ul>
                  </div>
                  @endif

                @guest
                <div class="d-none d-sm-inline-block ml-sm-auto">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-0">
                      <a class="u-header__navbar-link" href="{{route('authenticate')}}">Entrar</a>
                    </li>
                    @if (Route::has('register'))
                      <li class="list-inline-item mr-0">
                        <a class="u-header__navbar-link" href="{{route('register')}}">Registrar</a>
                      </li>
                    @endif
                  </ul>
                </div>
                @else
                <div class="d-none d-sm-inline-block ml-sm-auto">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item mr-0">
                        <a class="u-header__navbar-link" >Olá, {{ Auth::user()->nome }}</a>
                      </li>
                        <li class="list-inline-item mr-0">
                          <a class="u-header__navbar-link" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                          {{ __('Sair') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                        </li>
                    </ul>
                  </div>
                @endguest

               
              </div>
            </div>
          </div>
          <!-- End Topbar -->
    
          <div id="logoAndNav" class="container">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
              <!-- Logo -->
            <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{url('/')}}" aria-label="Front">
                {{-- <img src="/assets/img/logo-transparent.jpg" class="adjust-logo"/> --}}
                <span class="u-header__navbar-brand-text">Cuscuz</span>
              </a>
              <!-- End Logo -->
    
              <!-- Responsive Toggle Button -->
              <button type="button" class="navbar-toggler btn u-hamburger"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span id="hamburgerTrigger" class="u-hamburger__box">
                  <span class="u-hamburger__inner"></span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->
    
              <!-- Navigation -->
              <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                <ul class="navbar-nav u-header__navbar-nav">
                  <!-- Home -->
                  <li class="nav-item u-header__nav-item">
                    <a class="nav-link u-header__nav-link" href="{{url('/')}}">Home</a>
                  </li>
                  <!-- End Home -->
    
                  <!-- Pages -->
                  <li class="nav-item u-header__nav-item">
                    <a class="nav-link u-header__nav-link" href="{{route('produto.listar')}}">Produtos</a>
                  </li>
                  <!-- End Pages -->
    
                  <!-- Blog -->
                  <li class="nav-item u-header__nav-item">
                        <a class="nav-link u-header__nav-link" href="/categories">Categorias</a>
                  </li>
                  <!-- End Blog -->
    
                  <!-- Button -->
                  <li class="nav-item u-header__nav-last-item">
                  <a class="btn btn-sm btn-primary transition-3d-hover" href="{{route('carrinho.listar')}}" target="_blank">
                      Meu Carrinho
                    </a>
                  </li>
                  <!-- End Button -->
                </ul>
              </div>
              <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
          </div>
        </div>
      </header>