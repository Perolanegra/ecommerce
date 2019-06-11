@extends('index.classic')

@section('content')
<div id="shopItemsContent" class="container space-2 space-md-3">
        <div class="row">
@foreach(@$produtos as $key => $item)
	<div class="col-sm-6 col-lg-4 mb-5">
	<!-- Shop Item -->
	<a class="d-block card card-text-dark border-0 text-center transition-3d-hover" href="single-product.html">
		<img class="img-fluid rounded" src="../../assets/img/500x550/img8.jpg" alt="Image Description">
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