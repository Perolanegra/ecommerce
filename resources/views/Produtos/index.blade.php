@extends('index.classic')

@section('content')
	<form id="search" method="GET">
		<div class="input-group custom-search-form">
			<input id="input-search" type="text" class="form-control" name="search" placeholder="Pesquisar...">
			<span class="input-group-btn">
				<button id="searchProd" class="btn btn-default-sm" >
					<i class="fa fa-search">Buscar
				</button>
			</span>
		</div>
		<div class="input-group offset-md-8">
			<a id="clear" class="btn btn-sm btn-primary transition-3d-hover">
				Limpar Filtro
			</a>
		</div>
	</form>
	
	<div id="shopItemsContent" class="container space-2 space-md-3">
			<div class="row">
	@foreach(@$produtos as $key => $item)
		<div class="col-sm-6 col-lg-4 mb-5">
		<!-- Shop Item -->
		<a class="d-block card card-text-dark border-0 text-center transition-3d-hover" href={{route('produto.detalhe', ['item' => $item])}}>
			<img class="img-fluid rounded" src="/assets/img/500x550/img8.jpg" alt="Image Description">
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

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
<script>
$(document).ready(function() {
	$("#searchProd").click(function(e) {
		e.preventDefault();
		var q = $('#input-search').val();
		$.ajax({
			type: 'GET',
			url: '{{route("produto.search")}}', 
			data: {q:q},
			success: function(result) {
				$(document.body).html(result);
		}});
	});

	$("#clear").click(function(e) {
		e.preventDefault();
		$.ajax({
			type: 'GET',
			url: '{{route("produto.listar")}}', 
			success: function(result) {
				$(document.body).html(result);
		}});
	});
});
</script>