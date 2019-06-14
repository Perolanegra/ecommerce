@extends('index.classic')

@section('content')

<div class="position-relative gradient-half-warning-v3 overflow-hidden">
        <!-- Item Image -->
        <div class="col-md-6 position-md-absolute top-md-0 left-md-0 content-centered-y--md pl-0 mb-3 mb-md-0">
          <img class="img-fluid" src="/assets/img/banner-arabe.png" alt="Image Description">
        </div>
        <!-- End Item Image -->
  
        <!-- Content -->
        <div class="container space-2 space-md-3">
          <div class="row justify-content-md-end">
            <div class="col-md-6">
              <div class="mb-5">
                <span class="d-block lead text-white mb-2">Novidades, promoções e muito mais.</span>
                <h1 class="display-4 font-size-md-down-5 text-white font-weight-semi-bold">O Cuscuz ideal para presentear seu amor!</h1>
              </div>
              <a class="js-go-to btn text-primary btn-white transition-3d-hover" href="#shopItemsContent"
                 data-target="#shopItemsContent"
                 data-type="static">
                Quero agora!
              </a>
            </div>
          </div>
        </div>
        <!-- End Content -->
      </div>
      <!-- End Hero Section -->
      <!-- Shop Items Section -->
      <div id="shopItemsContent" class="container space-2 space-md-3">
        <div class="row">
          @foreach(@$produtos->take(3) as $key => $item)
          <div class="col-sm-6 col-lg-4 mb-5">
            <!-- Shop Item -->
            <a class="d-block card card-text-dark border-0 text-center transition-3d-hover" href={{route('produto.detalhe', ['item' => $item])}}>
              {{-- @if(strlen($item->foto))
                <img class="img-fluid rounded" src="{{$restUrl.'/'.$item->foto}}" alt="Image Description">
              @endif --}}
              <img class="img-fluid rounded" src="/assets/img/{{$item->foto}}" alt="Image Description">
              <div class="card-body pt-4 px-4">
                <h2 class="h5 mb-1">{{$item->nome}}</h2>
                <span class="d-block">{{$item->descricao}}</span>
              </div>
            </a>
            <!-- End Shop Item -->
          </div>
          @endforeach
        </div>
      </div>

@endsection