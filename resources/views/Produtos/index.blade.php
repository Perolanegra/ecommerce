@extends('index.classic')

@section('content')
	<form id="search" method="GET" class="col-md-8 offset-md-1 search-bar-style">
		<div class="input-group custom-search-form col-md-10">
			<input id="input-search" type="text" class="form-control" name="search" placeholder="Pesquisar...">
			<span class="input-group-btn">
				<button id="searchProd" class="btn btn-default-sm" >
					<i class="fa fa-search">Buscar</i>
				</button>
			</span>
		</div>
		<div class="input-group col-md-2">
			<a id="clear" class="btn btn-sm btn-primary transition-3d-hover">
				Limpar Filtro
			</a>
		</div>
	</form>
	<div class="col-md-12">
		<div class="row">
				<div class="col-md-4 align-content-center">
						<a class="btn btn-sm btn-primary transition-3d-hover btn-out" data-category="3" href="#">
							Tradicionais
						</a>
				</div>
		
				<div class="col-md-4 align-content-center">
						<a class="btn btn-sm btn-primary transition-3d-hover btn-out" data-category="2" href="#">
							Especiais
						</a>
				</div>
		
				<div class="col-md-4 align-content-center">
						<a class="btn btn-sm btn-primary transition-3d-hover btn-out" data-category="1" href="#">
							Fitness
						</a>
				</div>
		</div>
	</div>
	
	<div id="shopItemsContent" class="container space-2 space-md-3">
			<div class="row">
	@foreach(@$produtos as $key => $item)
		<div class="col-sm-6 col-lg-4 mb-5">
		<!-- Shop Item -->
		<a class="d-block card card-text-dark border-0 text-center transition-3d-hover" href={{route('produto.detalhe', ['item' => $item])}}>
			<img class="img-fluid rounded" src="/assets/img/{{$item->foto}}" alt="siri catado">
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

	$(".btn-out").click(function(e) {
		e.preventDefault();
		var q = parseInt(e.currentTarget.getAttribute('data-category'));
		$.ajax({
			type: 'GET',
			url: '{{route("produto.categoria")}}', 
			data: {q:q},
			success: function(result) {
				$(document.body).html(result);
		}});
	});
});
</script>